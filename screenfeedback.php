<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>New orders</title>
    <style>
    * {
        margin: 0;
        padding: 0;
    }

    html,
    body,
    #wrapper {
        width: 100%;
        height: 100%;
    }

    iframe {
    border-radius: 0 !important;
    }
    </style>
</head>
<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "e6dep7pbek");


</script>
<body>   


     <div id="wrapper" data-tf-widget="Nl8BwlYo" data-tf-transitive-search-params="name, sn, g, pe, pp" 
     data-tf-hidden="full_name=<?=$_GET['name']?>, school_name=<?=$_GET['sn']?>, grade=<?=$_GET['g']?>, parent_email=<?=$_GET['pe']?>, mobile_number_full=<?=$_GET['pp']?>" data-tf-inline-on-mobile data-tf-medium="snippet" data-tf-on-submit="didSubmit">
        
    </div> 
    <script src="//embed.typeform.com/next/embed.js"></script> 
</body>

</html>
<script>
  function didSubmit(data) {

       var get_url = window.location.href; 
        var url = new URL(get_url);
        var name = url.searchParams.get("name");
        var sn = url.searchParams.get("sn");
        var g = url.searchParams.get("g");
        var pe = url.searchParams.get("pe");
        var pp = url.searchParams.get("pp");
        //window.location.href = "http://example.com?responseId=" + data.responseId
        window.location.href="https://portal.clubgrok.com/games/end-game?name="+name+"&sn="+sn+"g="+g+"&pe="+pe+"&pp="+pp+"&tutorial=yes";
  }
</script>

