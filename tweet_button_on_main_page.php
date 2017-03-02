







This is installation for twitter tweet button on you main page news. 


Go to styles/templates/your_template/index.tpl 
Find the following code:   
<div class="panel-heading">
after this add yout twitter button and change "YOUR_WEBSITE.COM": 
<span class="pull-left hvr-push">
<a href="https://twitter.com/share" class="twitter-share-button" data-text="{$news.title} " data-url="http://YOUR_WEBSITE.COM/forum/view_topic/?tid={$news.id}" data-show-count="false">Tweet</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>		  
</span>
Right after this look for (adjust title padding):
 <a class="white-text" href="/forum/view_topic/?tid={$news.id}">{$news.title}</a>
 
Replace code with something like this (in this chase padding will be 15px):
 <a class="white-text" style="padding-left: 15px" href="/forum/view_topic/?tid={$news.id}">{$news.title}</a>
 
 
 You have succesfully installed your tweet button. Enjoy. 
 
