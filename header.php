<?php

//global 3 variables for default 120, 500, 120 avatar

global $default120url;
global $default120avatarurl;
global $default500url;
global $default500avatarurl;

$default120url = "http://media.insidepulse.com/shared/images/logos/default120_insidepulse.jpg";
$default500url = "http://media.insidepulse.com/shared/images/logos/default500_insidepulse.jpg";
$default120avatarurl .= "http://media.insidepulse.com/shared/images/v6/default120avatar.jpg";
$default500avatarurl = "http://media.insidepulse.com/shared/images/v6/default500.jpg";


global $authorslug;
$authorslug = "insider";

global $disqusslug;
$disqusslug = "inside-pulse";

global $featuredauthors;
$featuredauthors = "36|4|7|61|1";

global $overallpath;
$overallpath = $_SERVER['DOCUMENT_ROOT'] . "/";



global $active_zone;
global $featuredvalues;
global $left4x2values;
global $topstorysqladd;
global $rightfeaturedvalues;
global $rightnarrowvalues;

global $categoriesskiparray;
$categoriesskiparray = array('digest','age-gate','digest','authordigest', 'categorydigest', 'special', 'live-coverage', 'zonedigest', 'tagdigest');

global $thisurl;
$thisurl =  $_SERVER['HTTP_HOST'];

global $currenturl;
global $currenturlencoded;
$currenturl ="http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$currenturlencoded = urlencode($currenturl);


//header vars
$home_tabcss = "tab_cell_nav_off";
$movies_tabcss = "tab_cell_nav_off";
$tv_tabcss = "tab_cell_nav_off";
$comics_tabcss = "tab_cell_nav_off";
$wrestling_tabcss = "tab_cell_nav_off";
$games_tabcss = "tab_cell_nav_off";
$insidefights_tabcss = "tab_cell_nav_off";
$figures_tabcss = "tab_cell_nav_off";
$music_tabcss = "tab_cell_nav_off";
$sports_tabcss = "tab_cell_nav_off";
$more_tabcss = "tab_cell_nav_off";
$pulsecasts_tabcss = "tab_cell_nav_off";

//get overall zone
//first check outside urls

global $insidefightsurl;
global $diehardgamefanurl;
global $wrestlingurl;
global $homeurl;

$insidefightsurl = "gamepainter.com";
$diehardgamefanurl = "gametagging.com";
$wrestlingurl = "gamepaint.com";
$homeurl = "insidepulse.net";

$insidefightsurl = "insidefights.com";
$diehardgamefanurl = "diehardgamefan.com";
$wrestlingurl = "wrestling.insidepulse.com";
$homeurl = "insidepulse.com";



if($thisurl==$insidefightsurl){
	$active_zone = "insidefights";
}

// diehardgamefan
elseif($thisurl==$diehardgamefanurl){
	$active_zone = "diehardgamefan";
}

// wrestling
elseif($thisurl==$wrestlingurl){
	$active_zone = "wrestling";
}
else{
	if($zone){
		$active_zone=$zone;
	}
	elseif(is_home()||is_page('home')){
		$active_zone = "home";
		$home_tabcss = "tab_cell_nav_on";
	}

	elseif(in_zone("pulsecasts")||is_page("pulsecasts")){
		$active_zone = "pulsecasts";
	}

	elseif(in_zone("movies")||is_page("movies")){
		$active_zone = "movies";
	}

	//tv
	elseif(in_zone("tv")||is_page("tv")){
		$active_zone = "tv";
	}

	//games
	elseif(in_zone("games")){
		$active_zone = "games";
	}

	//comics
	elseif(in_zone("comics-nexus")||is_page("comics-nexus")||is_page("comics")){
		$active_zone = "comics-nexus";
	}

	//music
	elseif(in_zone("music")||is_page("music")){
		$active_zone = "music";
	}

	//figures
	elseif(in_zone("figures")||is_page("figures")){
		$active_zone = "figures";
	}

	//commercials
	elseif(in_zone("commercials")||is_page("commercials")){
		$active_zone = "commercials";
	}

	//celebs
	elseif(in_zone("celebrities")||is_page("celebrities")){
		$active_zone = "celebrities";
	}

	//sports
	elseif(in_zone("sports")||is_page("sports")){
		$active_zone = "sports";
	}

	else{
		//$active_zone = "home";
		$home_tabcss = "tab_cell_nav_on";
	}
}

//home/zone home arrays
//arrays

$logoimageurl = "<a href=\"/\"><img src=\"http://media.insidepulse.com/shared/images/v7/logo.png\" class=\"bar_logo_insidepulse\"></a>";

if($active_zone=="home"){

	//subnav
	$subnavarray = array();
	$subnavarray[] = array('Movie Reviews', '/category/theatrical-reviews');
	$subnavarray[] = array('Wrestling Newsboard', 'http://wrestling.insidepulse.com/newsboard/');
	$subnavarray[] = array('Game Reviews', 'http://diehardgamefan.com/category/reviews/');
	$subnavarray[] = array('News', '/category/news/');
	$subnavarray[] = array('MMA News', 'http://insidefights.com/category/mma-news/');
	$subnavarray[] = array('Twilight', '/tag/twilight/');
	$subnavarray[] = array('Full Listing', '/latest-updates/');

	//format
	//$left4x2values = array($type, $slug, $name, $clickthru);


	//featured
	$featuredvalues = array();
	$featuredvalues[] = array('cat', 'news', 'news', '/category/news');
	$featuredvalues[] = array('cat', 'reviews', 'reviews', '/category/reviews');
	$featuredvalues[] = array('cat', 'features', 'features', '/category/features');

	//left4x2
	$left4x2values = array();
	$left4x2values[] = array('zone', 'movies', 'Movies', '/movies');
	$left4x2values[] = array('zone', 'tv', 'Television', '/tv');
	$left4x2values[] = array('zone', 'sports', 'Sports', '/sports');
	$left4x2values[] = array('rss', 'http://' . $wrestlingurl . '/feed/', 'Wrestling', 'http://wrestling.insidepulse.com/');
	$left4x2values[] = array('rss', 'http://' . $insidefightsurl . '/feed/', 'Inside Fights', 'http://insidefights.com/');
	$left4x2values[] = array('rss', 'http://' . $diehardgamefanurl . '/feed/', 'Diehard Gamefan', 'http://diehardgamefan.com/');
	$left4x2values[] = array('zone', 'comics-nexus', 'Comics Nexus', '/comics-nexus');
	$left4x2values[] = array('zone', 'music', 'Music', '/music');
	//$left4x2values[] = array('zonecat', 'movies|news', 'movie news', '/news');
	//$left4x2values[] = array('cat', 'news', 'news', '/news');

	//rightfeatured
	$rightfeaturedvalues = array();
	$rightfeaturedvalues[] = array('zonecat', 'movies|dvd-reviews', 'DVD Reviews', '/category/dvd-reviews/');
	$rightfeaturedvalues[] = array('zonecat', 'tv|news', 'TV News', '/category/news/');

	//rightnarrowvalues
	$rightnarrowvalues = array();
	$rightnarrowvalues[] = array('cat', 'news', 'news', '/category/news/');

}
elseif($active_zone=="tv"){

	$tv_tabcss = "tab_cell_nav_on";

	//format
	//$left4x2values = array($type, $slug, $name, $clickthru);
	$featuredauthors = "2|110|122|172|169";

	//subnav
	$subnavarray = array();
	$subnavarray[] = array('News', '/category/news');
	$subnavarray[] = array('Spoilers', '/category/spoilers');
	$subnavarray[] = array('Reviews', 'reviews', '/category/reviews');
	$subnavarray[] = array('Full Listing', '/zone/tv/');

	//featured
	$featuredvalues = array();
	$featuredvalues[] = array('cat', 'news', 'news', '/latest-updates/?zone=tv&cat=news');
	$featuredvalues[] = array('cat', 'reviews', 'reviews', '/latest-updates/?zone=tv&cat=reviews');
	$featuredvalues[] = array('cat', 'features', 'features', '/latest-updates/?zone=tv&cat=features');

	//left4x2
	$left4x2values = array();
	$left4x2values[] = array('zonecat', 'tv|news', 'news', '/category/news');
	$left4x2values[] = array('zonecat', 'tv|spoilers', 'spoilers', '/category/spoilers');
	$left4x2values[] = array('zonecat', 'tv|reviews', 'reviews', '/category/reviews');
	$left4x2values[] = array('zonecat', 'tv|features', 'features', '/category/features');
	$left4x2values[] = array('zonecat', 'tv|interviews', 'interviews', '/category/interviews');
	$left4x2values[] = array('tag', 'the-x-factor,x-factor', 'The X Factor', '/latest-updates/?tag=the-x-factor,x-factor');
	$left4x2values[] = array('zonetag', 'tv|survivor,survivor-south-pacific,survivor-redemption-island', 'survivor', '/tag/survivor/');
	$left4x2values[] = array('zonetag', 'tv|glee', 'glee', '/tag/glee/');

	//topstory sql add
	$topstorysqladd = "&zone=tv";

	//rightfeatured
	$rightfeaturedvalues = array();
	$rightfeaturedvalues[] = array('zonecat', 'tv|features', 'TV features', '/category/features/');
	$rightfeaturedvalues[] = array('zonecat', 'tv|news', 'TV news', '/category/news/');

	//rightnarrowvalues
	$rightnarrowvalues = array();
	$rightnarrowvalues[] = array('cat', 'news', 'news', '/category/news/');


}


elseif($active_zone=="movies"){

	$movies_tabcss = "tab_cell_nav_on";
	$featuredauthors = "7|220|124|221|222|198";


	//format
	//$left4x2values = array($type, $slug, $name, $clickthru);

	//subnav
	$subnavarray = array();
	$subnavarray[] = array('Movie Reviews', '/category/theatrical-reviews');
	$subnavarray[] = array('Blu Ray Reviews', '/category/blu-ray-reviews');
	$subnavarray[] = array('DVD Reviews', '/category/dvd-reviews');
	$subnavarray[] = array('Full Listing', '/zone/movies/');

	//featured
	$featuredvalues = array();
	$featuredvalues[] = array('zonecat', 'movies|reviews', 'reviews', '/latest-updates/?zone=movies&cat=reviews');
	$featuredvalues[] = array('zonecat', 'movies|news', 'news', '/latest-updates/?zone=movies&cat=news');
	$featuredvalues[] = array('zonecat', 'movies|features', 'features', '/latest-updates/?zone=movies&cat=features');

	//left4x2
	$left4x2values = array();
	$left4x2values[] = array('zonecat', 'movies|theatrical-reviews', 'Movie reviews', '/category/theatrical-reviews');
	$left4x2values[] = array('zonecat', 'movies|blu-ray-reviews', 'blu ray reviews', '/category/blu-ray-reviews');
	$left4x2values[] = array('zonecat', 'movies|dvd-reviews', 'dvd reviews', '/category/dvd-reviews');
	$left4x2values[] = array('zonecat', 'movies|news', 'news', '/category/news');
	$left4x2values[] = array('zonecat', 'movies|podcasts', 'podcasts', '/category/podcasts');
	$left4x2values[] = array('zonecat', 'movies|trailers', 'trailers', '/category/trailers');
	$left4x2values[] = array('tag', 'the-dark-knight-rises', 'dark knight rises', '/tag/the-dark-knight-rises');
	$left4x2values[] = array('tag', 'box-office', 'box office', '/tag/box-office');

	//topstory sql add
	$topstorysqladd = "&zone=movies";


	//rightfeatured
	$rightfeaturedvalues = array();
	$rightfeaturedvalues[] = array('zonecat', 'movies|theatrical-reviews', 'Movie Reviews', '/category/theatrical-reviews/');
	$rightfeaturedvalues[] = array('zonecat', 'movies|news', 'Movie News', '/category/news/');

	//rightnarrowvalues
	$rightnarrowvalues = array();
	$rightnarrowvalues[] = array('cat', 'news', 'news', '/category/news/');


}

elseif($active_zone=="comics-nexus"){

$logoimageurl = "<a href=\"/\"><img src=\"http://media.insidepulse.com/shared/images/v7/comicsnexuslogo.png\" class=\"bar_logo_comicsnexus\"></a>";
	$comics_tabcss = "tab_cell_nav_on";
	$featuredauthors = "178|177|179|842|182|867|11";

	//format
	//$left4x2values = array($type, $slug, $name, $clickthru);


	//subnav
	$subnavarray = array();
	$subnavarray[] = array('DC', '/tag/dc-comics');
	$subnavarray[] = array('Marvel', '/tag/marvel');
	$subnavarray[] = array('Comics Forums', 'http://forum.insidepulse.com/ubbthreads/ubbthreads.php?ubb=cfrm&c=3');
	$subnavarray[] = array('Full Listing', '/zone/comics-nexus/');

	//featured
	$featuredvalues = array();
	$featuredvalues[] = array('zonetag', 'comics-nexus|dc-comics-relaunch', 'DC Relaunch', '/latest-updates/?zone=comics-nexus&tag=dc-comics-relaunch');
	$featuredvalues[] = array('zonecat', 'comics-nexus|news', 'news', '/latest-updates/?zone=comics-nexus&cat=news');
	$featuredvalues[] = array('zonecat', 'comics-nexus|columns', 'features', '/latest-updates/?zone=comics-nexus&cat=features');

	//left4x2
	$left4x2values = array();
	$left4x2values[] = array('zonecat', 'comics-nexus|news', 'news', '/latest-updates/?zone=comics-nexus&cat=news');
	$left4x2values[] = array('zonecat', 'comics-nexus|spoilers', 'spoilers', '/latest-updates/?zone=comics-nexus&cat=spoilers');
	$left4x2values[] = array('zonecat', 'comics-nexus|reviews', 'reviews', '/latest-updates/?zone=comics-nexus&cat=reviews');
	$left4x2values[] = array('zonecat', 'comics-nexus|columns', 'features', '/latest-updates/?zone=comics-nexus&cat=features');
	$left4x2values[] = array('zonecat', 'comics-nexus|interviews', 'interviews', '/latest-updates/?zone=comics-nexus&cat=interviews');
	$left4x2values[] = array('tag', 'dc-comics-relaunch', 'DC Relaunch', '/tag/dc-comics-relaunch');
	$left4x2values[] = array('zonetag', 'figures|dc-comics', 'DC Figures', '/latest-updates/?zone=figures&tag=dc-comics/');
	$left4x2values[] = array('zonetag', 'figures|marvel', 'Marvel Figures', '/latest-updates/?zone=figures&tag=marvel/');
	$left4x2values[] = array('tag', 'marvel', 'marvel', '/tag/marvel');
	$left4x2values[] = array('zonecat', 'comics-nexus|in-stores-now', 'in stores now', '/latest-updates/?zone=comics-nexus&cat=in-stores-now');
	$left4x2values[] = array('zonecat', 'comics-nexus|podcasts', 'podcasts', '/latest-updates/?zone=comics-nexus&cat=podcasts');

	//topstory sql add
	$topstorysqladd = "&zone=comics-nexus";


	//rightfeatured
	$rightfeaturedvalues = array();
	$rightfeaturedvalues[] = array('zonecat', 'comics-nexus|reviews', 'Reviews', '/latest-updates/?zone=comics-nexus&cat=reviews');
	$rightfeaturedvalues[] = array('zonecat', 'comics-nexus|spoilers', 'Spoilers', '/latest-updates/?zone=comics-nexus&cat=spoilers');

	//rightnarrowvalues
	$rightnarrowvalues = array();
	$rightnarrowvalues[] = array('zonecat', 'comics-nexus|news', 'news', '/latest-updates/?zone=comics-nexus&cat=news');


}

elseif($active_zone=="pulsecasts"){

	$pulsecasts_tabcss = "tab_cell_nav_on";

	//format
	//$left4x2values = array($type, $slug, $name, $clickthru);


	//featured
	$featuredvalues = array();
	$featuredvalues[] = array('cat', 'news', 'news', '/category/news');
	$featuredvalues[] = array('cat', 'reviews', 'reviews', '/category/reviews');
	$featuredvalues[] = array('cat', 'features', 'features', '/category/features');

	//left4x2
	$left4x2values = array();
	$left4x2values[] = array('zonecat', 'comics-nexus|news', 'news', '/news');
	$left4x2values[] = array('zonecat', 'comics-nexus|reviews', 'reviews', '/reviews');
	$left4x2values[] = array('zonecat', 'comics-nexus|columns', 'features', '/features');
	$left4x2values[] = array('zonecat', 'comics-nexus|interviews', 'interviews', '/interviews');
	$left4x2values[] = array('tag', 'dc-comics-relaunch', 'DC Relaunch', '/tag/dc-comics-relaunch');
	$left4x2values[] = array('zonetag', 'figures|dc-comics', 'DC Figures', '/interviews');
	$left4x2values[] = array('tag', 'marvel', 'marvel', '/tag/marvel');
	$left4x2values[] = array('tag', 'batman', 'batman', '/tag/batman');

	//topstory sql add
	$topstorysqladd = "&zone=comics-nexus";


	//rightfeatured
	$rightfeaturedvalues = array();
	$rightfeaturedvalues[] = array('zonecat', 'movies|dvd-reviews', 'DVD Reviews', '/category/dvd-reviews/');
	$rightfeaturedvalues[] = array('zonecat', 'tv|news', 'TV News', '/category/news/');

	//rightnarrowvalues
	$rightnarrowvalues = array();
	$rightnarrowvalues[] = array('cat', 'news', 'news', '/category/news/');


}


elseif($active_zone=="games"){

	$games_tabcss = "tab_cell_nav_on";

	//format
	//$left4x2values = array($type, $slug, $name, $clickthru);


	//featured
	$featuredvalues = array();
	$featuredvalues[] = array('cat', 'news', 'news', '/category/news');
	$featuredvalues[] = array('cat', 'reviews', 'reviews', '/category/reviews');
	$featuredvalues[] = array('cat', 'features', 'features', '/category/features');

	//left4x2
	$left4x2values = array();
	$left4x2values[] = array('zonecat', 'games|news', 'news', '/news');
	$left4x2values[] = array('zonecat', 'games|reviews', 'reviews', '/reviews');
	$left4x2values[] = array('zonecat', 'games|features', 'features', '/features');
	$left4x2values[] = array('zonecat', 'games|interviews', 'interviews', '/interviews');

	//topstory sql add
	$topstorysqladd = "&zone=games";


	//rightfeatured
	$rightfeaturedvalues = array();
	$rightfeaturedvalues[] = array('zonecat', 'movies|dvd-reviews', 'DVD Reviews', '/category/dvd-reviews/');
	$rightfeaturedvalues[] = array('zonecat', 'tv|news', 'TV News', '/category/news/');

	//rightnarrowvalues
	$rightnarrowvalues = array();
	$rightnarrowvalues[] = array('cat', 'news', 'news', '/category/news/');


}

elseif($active_zone=="sports"){

	$sports_tabcss = "tab_cell_nav_on";
	$featuredauthors = "61|64|65|69";

	//format
	//$left4x2values = array($type, $slug, $name, $clickthru);


	//featured
	$featuredvalues = array();
	$featuredvalues[] = array('cat', 'news', 'news', '/category/news');
	$featuredvalues[] = array('cat', 'reviews', 'reviews', '/category/reviews');
	$featuredvalues[] = array('cat', 'features', 'features', '/category/features');

	//left4x2
	$left4x2values = array();
	$left4x2values[] = array('zonecat', 'sports|news', 'news', '/news');
	$left4x2values[] = array('zonecat', 'sports|reviews', 'reviews', '/reviews');
	$left4x2values[] = array('zonecat', 'sports|features', 'features', '/features');
	$left4x2values[] = array('zonecat', 'sports|interviews', 'interviews', '/interviews');

	//topstory sql add
	$topstorysqladd = "&zone=sports";


	//rightfeatured
	$rightfeaturedvalues = array();
	$rightfeaturedvalues[] = array('zonecat', 'movies|dvd-reviews', 'DVD Reviews', '/category/dvd-reviews/');
	$rightfeaturedvalues[] = array('zonecat', 'tv|news', 'TV News', '/category/news/');

	//rightnarrowvalues
	$rightnarrowvalues = array();
	$rightnarrowvalues[] = array('cat', 'news', 'news', '/category/news/');


}

elseif($active_zone=="figures"){

	//$more_tabcss = "tab_cell_nav_on";
	$figures_tabcss = "tab_cell_nav_on";

	//format
	//$left4x2values = array($type, $slug, $name, $clickthru);


	//featured
	$featuredvalues = array();
	$featuredvalues[] = array('zonecat', 'figures|news', 'news', '/category/news');
	$featuredvalues[] = array('zonecat', 'figures|podcasts', 'podcasts', '/category/podcasts');
	$featuredvalues[] = array('zonetag', 'figures|wwe-figures', 'wwe figures', '/tag/wwe-figures');

	//left4x2
	$left4x2values = array();
	$left4x2values[] = array('zonetag', 'figures|mattel', 'mattel', '/tag/mattel/');
	$left4x2values[] = array('zonetag', 'figures|hasbro', 'hasbro', '/tag/hasbro/');
	$left4x2values[] = array('zonetag', 'figures|mcfarlane-toys', 'mcfarlane', '/tag/mcfarlane-toys/');
	$left4x2values[] = array('zonetag', 'figures|other-toys', 'other', '/tag/other-toys/');

	//topstory sql add
	$topstorysqladd = "&zone=figures";


	//rightfeatured
	$rightfeaturedvalues = array();
	$rightfeaturedvalues[] = array('zonecat', 'movies|dvd-reviews', 'DVD Reviews', '/category/dvd-reviews/');
	$rightfeaturedvalues[] = array('zonecat', 'tv|news', 'TV News', '/category/news/');

	//rightnarrowvalues
	$rightnarrowvalues = array();
	$rightnarrowvalues[] = array('cat', 'news', 'news', '/category/news/');


}

elseif($active_zone=="music"){

	//$more_tabcss = "tab_cell_nav_on";
	$music_tabcss = "tab_cell_nav_on";

	//format
	//$left4x2values = array($type, $slug, $name, $clickthru);


	//featured
	$featuredvalues = array();
	$featuredvalues[] = array('cat', 'news', 'news', '/category/news');
	$featuredvalues[] = array('cat', 'reviews', 'reviews', '/category/reviews');
	$featuredvalues[] = array('cat', 'features', 'features', '/category/features');

	//left4x2
	$left4x2values = array();
	$left4x2values[] = array('zonecat', 'music|news', 'news', '/category/news');
	$left4x2values[] = array('zonetag', 'music|justin-bieber', 'justin bieber', '/tag/justin-bieber');
	$left4x2values[] = array('zonetag', 'music|american-idol', 'american idol', '/tag/american-idol');
	$left4x2values[] = array('zonecat', 'music|media', 'media', '/category/media');

	//topstory sql add
	$topstorysqladd = "&zone=music";


	//rightfeatured
	$rightfeaturedvalues = array();
	$rightfeaturedvalues[] = array('zonecat', 'movies|dvd-reviews', 'DVD Reviews', '/category/dvd-reviews/');
	$rightfeaturedvalues[] = array('zonecat', 'tv|news', 'TV News', '/category/news/');

	//rightnarrowvalues
	$rightnarrowvalues = array();
	$rightnarrowvalues[] = array('cat', 'news', 'news', '/category/news/');


}

elseif($active_zone=="celebrities"){

	$home_tabcss = "tab_cell_nav_on";

	//format
	//$left4x2values = array($type, $slug, $name, $clickthru);


	//featured
	$featuredvalues = array();
	$featuredvalues[] = array('cat', 'news', 'news', '/category/news');
	$featuredvalues[] = array('cat', 'reviews', 'reviews', '/category/reviews');
	$featuredvalues[] = array('cat', 'features', 'features', '/category/features');

	//left4x2
	$left4x2values = array();
	$left4x2values[] = array('zonecat', 'celebrities|news', 'news', '/category/news');
	$left4x2values[] = array('zonetag', 'celebrities|justin-bieber', 'justin bieber', '/tag/justin-bieber');
	$left4x2values[] = array('zonetag', 'celebrities|kim-kardashian', 'kim kardashian', '/tag/kim-kardashian');
	$left4x2values[] = array('zonecat', 'tv|spoilers', 'spoilers', '/category/spoilers/');

	//topstory sql add
	$topstorysqladd = "&zone=celebrities";


	//rightfeatured
	$rightfeaturedvalues = array();
	$rightfeaturedvalues[] = array('zonecat', 'movies|dvd-reviews', 'DVD Reviews', '/category/dvd-reviews/');
	$rightfeaturedvalues[] = array('zonecat', 'tv|news', 'TV News', '/category/news/');

	//rightnarrowvalues
	$rightnarrowvalues = array();
	$rightnarrowvalues[] = array('cat', 'news', 'news', '/category/news/');


}

elseif($active_zone=="wrestling"){

	$wrestling_tabcss = "tab_cell_nav_on";

	//format
	//$left4x2values = array($type, $slug, $name, $clickthru);

	$disqusslug = "pulsewrestling";
	$featuredauthors = "8|207|842|534|462|886|518|896";

	//subnav
	$subnavarray = array();
	$subnavarray[] = array('Newsboard', '/newsboard/');
	$subnavarray[] = array('Transactions', '/wwe-transaction-history/');
	$subnavarray[] = array('Title History', '/title-history/');
	$subnavarray[] = array('Top 100', '/top-100/');
	$subnavarray[] = array('IWC Glossary', '/iwc-glossary/');


	//featured
	$featuredvalues = array();
	$featuredvalues[] = array('cat', 'commentary', 'commentary', '/category/commentary');
	$featuredvalues[] = array('cat', 'recaps__reviews', 'recaps', '/category/recaps__reviews');
	$featuredvalues[] = array('cat', 'features', 'features', '/category/features');

	//left4x2
	$left4x2values = array();
	$left4x2values[] = array('cat', 'news', 'news', '/category/news', '8');
	$left4x2values[] = array('cat', 'commentary', 'commentary', '/category/commentary', '8');
	$left4x2values[] = array('cat', 'tv_shows', 'tv shows', '/category/tv_shows', '8');
	$left4x2values[] = array('cat', 'podcasts', 'podcasts', '/category/podcasts', '8');

	$left4x2values[] = array('cat', 'ppvs', 'ppvs', '/category/ppvs');
	$left4x2values[] = array('tag', 'the-rock', 'the rock', '/tag/the-rock');
	$left4x2values[] = array('tag', 'john-cena', 'John Cena', '/tag/john-cena');
	$left4x2values[] = array('tag', 'cm-punk', 'CM Punk', '/tag/cm-punk');


	//rightfeatured
	$rightfeaturedvalues = array();
	$rightfeaturedvalues[] = array('tag', 'wwe', 'wwe', '/tag/wwe/');
	$rightfeaturedvalues[] = array('tag', 'tna', 'tna', '/tag/tna/');

	//rightnarrowvalues
	$rightnarrowvalues = array();
	$rightnarrowvalues[] = array('cat', 'news', 'news', '/category/news/');


}

elseif($active_zone=="diehardgamefan"){

$logoimageurl = "<a href=\"/\"><img src=\"http://media.insidepulse.com/shared/images/v7/diehardgamefanlogo.png\" class=\"bar_logo_diehardgamefan\"></a>";
	$games_tabcss = "tab_cell_nav_on";

	//format
	//$left4x2values = array($type, $slug, $name, $clickthru);

	$authorslug = "diehard";
	$disqusslug = "diehardgamefan";
	$featuredauthors = "21|345|1367|605|884|47";

	//subnav
	$subnavarray = array();
	$subnavarray[] = array('Nintendo Reviews', '/latest-updates/?cat=nintendo-3ds-2,nintendo_wii,nintendo_ds,nintendo-wiiu/');
	$subnavarray[] = array('Sony Reviews', '/latest-updates/?cat=sony_ps3,sony_psp,sony-ps-vita');
	$subnavarray[] = array('Xbox Reviews', '/latest-updates/?cat=xbox_360/');
	$subnavarray[] = array('Tabletop Gaming', '/category/tabletop-gaming/');
	$subnavarray[] = array('Full Listing', '/latest-updates/');

	//featured
	$featuredvalues = array();
	$featuredvalues[] = array('cat', 'reviews', 'reviews', '/category/reviews');
	$featuredvalues[] = array('cat', 'tabletop-gaming', 'tabletop', '/category/tabletop-gaming');
	$featuredvalues[] = array('cat', 'features', 'features', '/category/features');

	//left4x2
	$left4x2values = array();
	$left4x2values[] = array('cat', 'nintendo-3ds-2,nintendo_wii,nintendo_ds,nintendo-wiiu', 'Nintendo', '/latest-updates/?cat=nintendo-3ds-2,nintendo_wii,nintendo_ds,nintendo-wiiu');
	$left4x2values[] = array('cat', 'sony_ps3,sony_psp,sony-ps-vita', 'sony', '/latest-updates/?cat=sony_ps3,sony_psp,sony-ps-vita');
	$left4x2values[] = array('cat', 'xbox_360', 'xbox', '/latest-updates/?cat=xbox_360');
	$left4x2values[] = array('cat', 'pc_games', 'pc games', '/category/pc_games');
	$left4x2values[] = array('cat', 'tabletop-gaming', 'tabletop gaming', '/category/tabletop-gaming');
	$left4x2values[] = array('cat', 'reviews', 'reviews', '/category/reviews');
	$left4x2values[] = array('cat', 'features', 'features', '/category/features');
	$left4x2values[] = array('cat', 'columns', 'columns', '/category/columns');


	//rightfeatured
	$rightfeaturedvalues = array();
	$rightfeaturedvalues[] = array('cat', 'tabletop-gaming', 'tabletop', '/category/tabletop-gaming/');
	$rightfeaturedvalues[] = array('tag', 'pokemon', 'pokemon', '/tag/pokemon/');

	//rightnarrowvalues
	$rightnarrowvalues = array();
	$rightnarrowvalues[] = array('cat', 'news', 'news', '/category/news/');


}


elseif($active_zone=="insidefights"){

$logoimageurl = "<a href=\"/\"><img src=\"http://media.insidepulse.com/shared/images/v7/insidefightslogo.png\" class=\"bar_logo_insidefights\"></a>";
	$insidefights_tabcss = "tab_cell_nav_on";

	$disqusslug = "insidefights";

	//format
	//$left4x2values = array($type, $slug, $name, $clickthru);

	$authorslug = "insider";
	$featuredauthors = "855|852|853";

	//subnav
	$subnavarray = array();
	$subnavarray[] = array('MMA news', '/category/mma-news/');
	$subnavarray[] = array('MMA columns', '/category/mma-columns');
	$subnavarray[] = array('Boxing news', '/category/boxing-news/');
	$subnavarray[] = array('Boxing columns', '/category/boxing-columns/');
	$subnavarray[] = array('Full Listing', '/latest-updates/');

	//featured
	$featuredvalues = array();
	$featuredvalues[] = array('cat', 'mma-columns', 'columns', '/category/mma-columns');
	$featuredvalues[] = array('cat', 'boxing-reviews', 'reviews', '/category/boxing-reviews');
	$featuredvalues[] = array('cat', 'mma-video', 'video', '/category/mma-video');

	//left4x2
	$left4x2values = array();
	$left4x2values[] = array('cat', 'mma-news', 'mma news', '/category/mma-news/');
	$left4x2values[] = array('cat', 'mma-previews', 'mma previews', '/category/mma-previews/');
	$left4x2values[] = array('cat', 'mma-columns', 'mma columns', '/category/mma-columns/');
	$left4x2values[] = array('cat', 'mma-video', 'mma video', '/category/mma-video/');
	$left4x2values[] = array('cat', 'boxing-columns', 'boxing columns', '/category/boxing-columns/');
	$left4x2values[] = array('cat', 'boxing-news', 'boxing news', '/category/boxing-news/');
	$left4x2values[] = array('cat', 'boxing-features', 'boxing features', '/category/boxing-features/');
	$left4x2values[] = array('cat', 'boxing-results', 'boxing results', '/category/boxing-results/');


	//rightfeatured
	$rightfeaturedvalues = array();
	$rightfeaturedvalues[] = array('cat', 'mma-news', 'mma news', '/category/mma-news/');
	$rightfeaturedvalues[] = array('cat', 'boxing-news', 'boxing news', '/category/boxing-news/');

	//rightnarrowvalues
	$rightnarrowvalues = array();
	$rightnarrowvalues[] = array('cat', 'boxing', 'boxing', '/boxing/boxing/');


}








?>
<html <?php language_attributes();?> xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://ogp.me/ns#"
      xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>

<?php bloginfo('name'); ?>

<?php
	//if ( !(is_404()) && (is_single()) or (is_page()) or (is_archive()) ) {
	if ( !(is_404()) && (is_single()) or (is_archive()) ) {
	?>
	|
	<?php } ?>

	<?php wp_title(''); ?>
</title>

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>?<?php echo rand(0,10000000); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script>
var currentvalue = 1;
</script>
<script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/version7.js"></script>
<link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.icon" />

<?php
if(is_single()){
?>
    <meta property="og:url" content="<?php echo $currenturl; ?>"/>
    <meta property="og:image" content="<?php echo get_post_meta($post->ID, 'topstory120x120', true); ?>"/>
<?php
}
?>

<?php wp_head(); ?>


<!-- google analytics -->

<?php
if($active_zone=="insidefights"){
	include_once('analytics/insidefights.txt');

	echo "
	<style>
.top{
	background:url('http://media.insidepulse.com/shared/images/v7/top_bg_blue.png') repeat-x;
}
.color1{
	color:#055087;
}
.article_body a{
	color:#055087;
}

.topstory_scroll_cell .on{
	border:1px solid #3982b8;
}

.tab_on{
	color:#3982b8;
}

h3.icon1{
	background:url('http://media.insidepulse.com/shared/images/v7/icon4x2_fights1.png') no-repeat top left;
}

h3.icon1m{
	background:url('http://media.insidepulse.com/shared/images/v7/rightgreyicon1_fights.png') no-repeat top left;
}

h3.icon2m{
	background:url('http://media.insidepulse.com/shared/images/v7/rightgreyicon2_fights.png') no-repeat top left;
}










	</style>

	";

}
elseif($active_zone=="diehardgamefan"){
	include_once('analytics/diehardgamefan.txt');

	echo "
	<style>
.top{
	background:url('http://media.insidepulse.com/shared/images/v7/top_bg_diehard.png') repeat-x;
}

.color1{
	color:#1313bb;
}
.article_body a{
	color:#1313bb;
}


.topstory_scroll_cell .on{
	border:1px solid #20205c;
}

.tab_on{
	color:#20205c;
}


h3.icon1{
	background:url('http://media.insidepulse.com/shared/images/v7/icon4x2_blue.png') no-repeat top left;
}

h3.icon1m{
	background:url('http://media.insidepulse.com/shared/images/v7/rightgreyicon1_blue.png') no-repeat top left;
}

h3.icon2m{
	background:url('http://media.insidepulse.com/shared/images/v7/rightgreyicon2_blue.png') no-repeat top left;
}










	</style>

	";
}elseif($active_zone=="comics-nexus"){

	echo "
	<style>
.top{
	background:url('http://media.insidepulse.com/shared/images/v7/top_bg_orange.png') repeat-x;
}
.color1{
	color:#F26122;
}
.article_body a{
	color:#F26122;
}


.topstory_scroll_cell .on{
	border:1px solid #F89623;
}

.tab_on{
	color:#F89623;
}

h3.icon1{
	background:url('http://media.insidepulse.com/shared/images/v7/icon4x2_orange.png') no-repeat top left;
}









	</style>

	";
}

elseif($active_zone=="wrestling"){
	include_once('analytics/wrestling.txt');
}
elseif($active_zone){
	include_once('analytics/'.$active_zone.'.txt');
}

?>



<!--- PLACE BEFORE FIRST OAS AD UNIT IN PAGE CODE, i.e. near opening <body> tag --->
<!--- begin oas cache-busting script --->
<script LANGUAGE="JavaScript1.1">
OAS_rn = '001234567890'; OAS_rns = '1234567890';
OAS_rn = new String (Math.random()); OAS_rns = OAS_rn.substring (2, 11);
</script>
<!--- end oas cache-busting script --->




</head>


<body class="font1">
<div class="top">
	<div class="inner">
		<div class="top_tabs" id="t10" name="t10">

			<div id="nav1" name="nav1" class="<?php echo $home_tabcss; ?>";>
				<div class="left">
					<a class="font2" href="http://<?php echo $homeurl; ?>/"><img src="http://media.insidepulse.com/shared/images/v7/homeicon.png"></a>
				</div>
				<div class="right"></div>
			</div>

			<div id="nav2" name="nav2" class="<?php echo $movies_tabcss; ?>";>
				<div class="left">
					<a class="font2" href="http://<?php echo $homeurl; ?>/movies/">Movies</a>
				</div>
				<div class="right"></div>
			</div>

			<div id="nav3" name="nav3" class="<?php echo $tv_tabcss; ?>";>
				<div class="left">
					<a class="font2" href="http://<?php echo $homeurl; ?>/tv/">TV</a>
				</div>
				<div class="right"></div>
			</div>

			<div id="nav4" name="nav4" class="<?php echo $comics_tabcss; ?>";>
				<div class="left">
					<a class="font2" href="http://<?php echo $homeurl; ?>/comics-nexus/">Comics</a>
				</div>
				<div class="right"></div>
			</div>

			<div id="nav5" name="nav5" class="<?php echo $wrestling_tabcss; ?>";>
				<div class="left">
					<a class="font2" href="http://<?php echo $wrestlingurl; ?>/">Wrestling</a>
				</div>
				<div class="right"></div>
			</div>

			<div id="nav6" name="nav6" class="<?php echo $games_tabcss; ?>";>
				<div class="left">
					<a class="font2" href="http://<?php echo $diehardgamefanurl; ?>/">Games</a>
				</div>
				<div class="right"></div>
			</div>

			<div id="nav7" name="nav7" class="<?php echo $insidefights_tabcss; ?>";>
				<div class="left">
					<a class="font2" href="http://<?php echo $insidefightsurl; ?>/">MMA/Boxing</a>
				</div>
				<div class="right"></div>
			</div>

			<div id="nav8" name="nav8" class="<?php echo $sports_tabcss; ?>";>
				<div class="left">
					<a class="font2" href="http://<?php echo $homeurl; ?>/sports/">Sports</a>
				</div>
				<div class="right"></div>
			</div>

			<div id="nav9" name="nav9" class="<?php echo $figures_tabcss; ?>";>
				<div class="left">
					<a class="font2" href="http://<?php echo $homeurl; ?>/figures/">Figs</a>
				</div>
				<div class="right"></div>
			</div>

			<div id="nav10" name="nav10" class="<?php echo $music_tabcss; ?>";>
				<div class="left">
					<a class="font2" href="http://<?php echo $homeurl; ?>/music/">Music</a>
				</div>
				<div class="right"></div>
			</div>

			<div id="nav11" name="nav11" class="<?php echo $more_tabcss; ?>";>
				<div class="left">
					<a class="font2" href="http://forum.insidepulse.com/ubbthreads/ubbthreads.php">Forum</a>
				</div>
				<div class="right"></div>
			</div>

<!--
			<div id="nav10" name="nav10" class="<?php echo $more_tabcss; ?>";>
				<div class="left">
					<ul id="jsddm">
						<li><a class="font2" href="#">More</a>
							<ul>
								<li><a class="font2" href="http://<?php echo $homeurl; ?>/figures/">Figures</a></li>
								<li><a class="font2" href="http://<?php echo $homeurl; ?>/music/">Music</a></li>
								<li><a class="font2" href="http://<?php echo $homeurl; ?>/celebrities/">Celebrities</a></li>
								<li><a class="font2" href="http://<?php echo $homeurl; ?>/games/">Games</a></li>
								<li><a class="font2" href="http://forum.insidepulse.com/ubbthreads/ubbthreads.php">Forum</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="right"></div>
			</div>
-->

		</div>
		<div class="top_search">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : ?>
			<?php endif; ?>


		</div>

	</div>


</div>
<?php

//output subnav
if($subnavarray){
$subnavcount = count($subnavarray);
	echo "<div class=\"submenu\">";
		echo "<div class=\"inner\">";


		for($i=0;$i<$subnavcount;$i++){
			echo "<li><a href=\"" . $subnavarray[$i][1] . "\">" . $subnavarray[$i][0] . "</a>";

			if($subnavcount==$i+1){
				echo "</li>";
			}
			else{
				echo "&middot;</li>";
			}
		}
		echo "</div>";
	echo "</div>";
	echo "<div class=\"clear\"></div>";
}
?>


<div class="bar">
	<div class="inner">
		<div class="bar_logo">
			<?php echo $logoimageurl; ?>
		</div>
		<div class="bar_ad">
			<!--<a href="#"><img src="http://media.insidepulse.com/shared/images/v7/ad728.png"></a>-->

			<!--- start of insidepulse.sportsfanlive.com/default_companion_x06_(728x90.1) --->
			<script LANGUAGE="JavaScript1.1">
			document.write('<script LANGUAGE="JavaScript1.1" SRC="http://oascentral.sportsfanlive.com/RealMedia/ads/adstream_jx.ads/insidepulse.sportsfanlive.com/default/jx/comp/1'+OAS_rns+'@Position2,Left,x06!x06?XE&Partner=insidepulse&PartnerUnit=insidepulse.728x90.1.default/jx/comp&XE" type="text/javascript"><\/script>');
			</script>
			<NOSCRIPT>
			<A HREF="http://oascentral.sportsfanlive.com/RealMedia/ads/click_nx.ads/insidepulse.sportsfanlive.com/default/nx/comp@Position2,Left,x06!x06?x?XE&Partner=insidepulse&PartnerUnit=insidepulse.728x90.1.default/nx/comp&XE" target="_blank">
			<IMG SRC="http://oascentral.sportsfanlive.com/RealMedia/ads/adstream_nx.ads/insidepulse.sportsfanlive.com/default/nx/comp@Position2,Left,x06!x06?x?XE&Partner=insidepulse&PartnerUnit=insidepulse.728x90.1.default/nx/comp&XE" border=0>
			</A>
			</NOSCRIPT>
			<!--- end of insidepulse.sportsfanlive.com/default_companion_x06_(728x90.1) --->


		</div>
	</div>

</div>


<div class="clear"></div>
<div class="inner content">

