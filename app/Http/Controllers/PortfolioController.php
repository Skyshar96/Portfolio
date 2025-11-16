<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function home()
    {
        return view('home', [
            'pageTitle' => 'Accueil — Wyatt Guemache'
        ]);
    }

    public function veilleQuantique()
    {
        // Flux RSS spécialisés en informatique/computing quantique avec images
        $articles1 = $this->fetchRssFeed('https://thequantuminsider.com/feed/', 10);
        $articles2 = $this->fetchRssFeed('https://quantumzeitgeist.com/feed/', 20);
        $articles3 = $this->fetchRssFeed('https://www.sciencedaily.com/rss/computers_math/quantum_computers.xml', 10);
        
        $articles = array_merge($articles1, $articles2, $articles3);
        
        // Ajouter une image par défaut pour les articles sans image
        foreach ($articles as &$article) {
            if (empty($article['image'])) {
                $article['image'] = '/assets/images/quantum-default.jpg';
            }
        }
        
        return view('veille-quantique', [
            'pageTitle' => 'Veille Informatique Quantique — Wyatt Guemache',
            'articles' => $articles
        ]);
    }

    public function veilleCyber()
    {
        // Combiner plusieurs flux RSS pour avoir plus d'articles avec images
        $articles1 = $this->fetchRssFeed('https://www.securityweek.com/feed/', 10);
        $articles2 = $this->fetchRssFeed('https://krebsonsecurity.com/feed/', 10);
        $articles3 = $this->fetchRssFeed('https://thehackernews.com/feeds/posts/default', 15);
        
        $articles = array_merge($articles1, $articles2, $articles3);
        
        // Ajouter une image par défaut pour les articles sans image
        foreach ($articles as &$article) {
            if (empty($article['image'])) {
                $article['image'] = '/assets/images/cyber-default.jpg';
            }
        }
        
        return view('veille-cyber', [
            'pageTitle' => 'Veille Cybersécurité — Wyatt Guemache',
            'articles' => $articles
        ]);
    }

    private function fetchRssFeed($url, $limit = 20)
    {
        try {
            libxml_use_internal_errors(true);
            
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 15);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36');
            
            $xmlContent = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
            
            if (!$xmlContent || $httpCode != 200) {
                return [];
            }
            
            $xml = @simplexml_load_string($xmlContent);
            if (!$xml || !isset($xml->channel->item)) {
                return [];
            }

            $articles = [];
            $count = 0;

            foreach ($xml->channel->item as $item) {
                if ($count >= $limit) break;

                $title = (string)$item->title;
                $link = (string)$item->link;
                
                // Extraire la description
                $description = '';
                $rawDescription = '';
                if (isset($item->description)) {
                    $rawDescription = (string)$item->description;
                    $description = strip_tags($rawDescription);
                    $description = trim($description);
                    if (strlen($description) > 250) {
                        $description = mb_substr($description, 0, 250) . '...';
                    }
                }

                // Extraire l'image - plusieurs méthodes
                $image = '';
                
                // Méthode 1: enclosure (podcast/media RSS)
                if (isset($item->enclosure['url'])) {
                    $enclosureUrl = (string)$item->enclosure['url'];
                    if (preg_match('/\.(jpg|jpeg|png|gif|webp)$/i', $enclosureUrl)) {
                        $image = $enclosureUrl;
                    }
                }
                
                // Méthode 2: media:content ou media:thumbnail (Media RSS)
                if (empty($image)) {
                    $media = $item->children('media', true);
                    if (isset($media->content)) {
                        $image = (string)$media->content->attributes()->url;
                    } elseif (isset($media->thumbnail)) {
                        $image = (string)$media->thumbnail->attributes()->url;
                    }
                }
                
                // Méthode 3: chercher dans la description HTML
                if (empty($image) && !empty($rawDescription)) {
                    if (preg_match('/<img[^>]+src=["\']([^"\']+)["\'][^>]*>/i', $rawDescription, $matches)) {
                        $image = $matches[1];
                    }
                }
                
                // Méthode 4: content:encoded (WordPress)
                if (empty($image)) {
                    $content = $item->children('content', true);
                    if (isset($content->encoded)) {
                        $contentHtml = (string)$content->encoded;
                        if (preg_match('/<img[^>]+src=["\']([^"\']+)["\'][^>]*>/i', $contentHtml, $matches)) {
                            $image = $matches[1];
                        }
                    }
                }

                $pubDate = 'Récent';
                if (isset($item->pubDate)) {
                    $timestamp = strtotime((string)$item->pubDate);
                    if ($timestamp) {
                        $pubDate = date('d/m/Y', $timestamp);
                    }
                }

                if (!empty($title) && !empty($link)) {
                    $articles[] = [
                        'title' => $title,
                        'link' => $link,
                        'description' => $description ?: 'Cliquez pour lire l\'article complet.',
                        'pubDate' => $pubDate,
                        'image' => $image
                    ];
                    $count++;
                }
            }

            return $articles;
        } catch (\Exception $e) {
            \Log::error('RSS Feed Error: ' . $e->getMessage());
            return [];
        }
    }

    public function stages()
    {
        return view('stages', [
            'pageTitle' => 'Expériences — Wyatt Guemache'
        ]);
    }

    public function codeConduite()
    {
        return view('code-conduite', [
            'pageTitle' => 'Code de conduite — Wyatt Guemache'
        ]);
    }
}
