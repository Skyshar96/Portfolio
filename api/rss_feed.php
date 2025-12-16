<?php
/**
 * Récupération et parsing de flux RSS
 */

function fetchRSSFeed($url, $maxItems = 5) {
    // Désactiver les erreurs XML
    libxml_use_internal_errors(true);
    
    // Récupérer le contenu du flux
    $rssContent = @file_get_contents($url);
    
    if ($rssContent === false) {
        return [];
    }
    
    // Parser le XML
    $xml = simplexml_load_string($rssContent);
    
    if ($xml === false) {
        return [];
    }
    
    $articles = [];
    $count = 0;
    
    // Vérifier si c'est un flux RSS ou Atom
    if (isset($xml->channel->item)) {
        // Format RSS
        foreach ($xml->channel->item as $item) {
            if ($count >= $maxItems) break;
            
            $articles[] = [
                'title' => (string)$item->title,
                'description' => (string)($item->description ?? $item->summary ?? ''),
                'link' => (string)$item->link,
                'pubDate' => (string)($item->pubDate ?? ''),
                'category' => (string)($item->category ?? 'Général')
            ];
            
            $count++;
        }
    } elseif (isset($xml->entry)) {
        // Format Atom
        foreach ($xml->entry as $entry) {
            if ($count >= $maxItems) break;
            
            $link = '';
            if (isset($entry->link)) {
                $link = (string)$entry->link['href'];
            }
            
            $articles[] = [
                'title' => (string)$entry->title,
                'description' => (string)($entry->summary ?? $entry->content ?? ''),
                'link' => $link,
                'pubDate' => (string)($entry->published ?? $entry->updated ?? ''),
                'category' => (string)($entry->category['term'] ?? 'Général')
            ];
            
            $count++;
        }
    }
    
    return $articles;
}

function formatDate($dateString) {
    if (empty($dateString)) {
        return date('d M Y');
    }
    
    $timestamp = strtotime($dateString);
    if ($timestamp === false) {
        return date('d M Y');
    }
    
    $mois = ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Août', 'Sep', 'Oct', 'Nov', 'Déc'];
    return date('d', $timestamp) . ' ' . $mois[date('n', $timestamp) - 1] . ' ' . date('Y', $timestamp);
}

function stripHtmlTags($text, $maxLength = 200) {
    $text = strip_tags($text);
    $text = html_entity_decode($text, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $text = preg_replace('/\s+/', ' ', $text);
    $text = trim($text);
    
    if (strlen($text) > $maxLength) {
        $text = substr($text, 0, $maxLength);
        $lastSpace = strrpos($text, ' ');
        if ($lastSpace !== false) {
            $text = substr($text, 0, $lastSpace);
        }
        $text .= '...';
    }
    
    return $text;
}

function getRandomImage($category = 'technology') {
    $images = [
        'quantum' => [
            'https://images.unsplash.com/photo-1635070041078-e363dbe005cb?w=600&h=400&fit=crop',
            'https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=600&h=400&fit=crop',
            'https://images.unsplash.com/photo-1622737133809-d95047b9e673?w=600&h=400&fit=crop',
            'https://images.unsplash.com/photo-1676911809746-7b9f9f8b8f78?w=600&h=400&fit=crop',
            'https://images.unsplash.com/photo-1518770660439-4636190af475?w=600&h=400&fit=crop'
        ],
        'cyber' => [
            'https://images.unsplash.com/photo-1550751827-4bd374c3f58b?w=600&h=400&fit=crop',
            'https://images.unsplash.com/photo-1555949963-ff9fe0c870eb?w=600&h=400&fit=crop',
            'https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=600&h=400&fit=crop',
            'https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?w=600&h=400&fit=crop',
            'https://images.unsplash.com/photo-1504639725590-34d0984388bd?w=600&h=400&fit=crop'
        ]
    ];
    
    $imageSet = $images[$category] ?? $images['cyber'];
    return $imageSet[array_rand($imageSet)];
}
