- To download image
```
var link_image = "images/published_certificate/" + $("#certificate_owner_name").val() + "_" + $("#certificate_date_published").val() + "_" + $("#certificate_name").val() + ".png";
var a = $("<a>").attr("href", $('#certificate_final_image').attr('src')).attr("download", "images/published_certificate/1.png").appendTo("body");
a[0].click();
a.remove();
```