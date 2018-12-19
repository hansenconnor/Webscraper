<?php
# Create a DOM parser object
$dom = new DOMDocument();

# Parse the HTML
# The @ before the method call suppresses any warnings that
# loadHTML might throw because of invalid HTML in the page.
@$dom->loadHTML($result);

# Iterate over all the <input> tags
foreach($dom->getElementsByTagName('input') as $input) {
        # Show the attribute value
        echo $input->getAttribute('value');
        echo "<br />";
}
?>





$item['thumb']  = $article->find('img[class=lazy]', 0)->src;
$item['thumb']  = $article->find('.image img', 0)->src;
$item['thumb']  = $article->find('img.lazy', 0)->src;




<!-- #tabs-1 > div.tab-areas.clear > div.tab-side.desktop-layout > a > img -->


<!-- .tab-side desktop-layout a .href -->