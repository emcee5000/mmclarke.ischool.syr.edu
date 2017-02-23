<?php
include('twitterapi.php');


$twitter_query= "#beatnova";
$search = new TwitterSearch($twitter_query);
$results = $search->results();


foreach($results as $result){
	echo '<div class="twitter_status" style="display:none;">';
	echo '<img src="'.$result->profile_image_url.'" class="twitter_image">';
	$text_n=toLink($result->text);
	echo $text_n;
	echo '';
	echo 'From: from_user.>'.$result->from_user.': ';
	echo 'at: '.$result->created_at;
	echo '<input type="hidden" value="'.$result->id.'"></input>';
	echo '';
	echo '</div>';
}

?>