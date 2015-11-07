<!-- //Skyscanner Widget key



//0614a98b-4b85-408f-abeb-4e4db4cd1f14

//Widgets code -->
<script type="text/javascript" src="//api.skyscanner.net/api.ashx?key=0614a98b-4b85-408f-abeb-4e4db4cd1f14"></script>
<script type="text/javascript">
   skyscanner.load("snippets","2");
   function main(){
       var snippet = new skyscanner.snippets.SearchPanelControl();
       snippet.setShape("leaderboard");
       snippet.setCulture("en-GB");
       snippet.setCurrency("USD");
       snippet.setMarket("US");
       snippet.setProduct("flights","1");

       snippet.draw(document.getElementById("snippet_searchpanel"));
   }
   skyscanner.setOnLoadCallback(main);
</script>
<div id="snippet_searchpanel" style="width: auto; height:auto;"></div>