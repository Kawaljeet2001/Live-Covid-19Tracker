$(".cases-number").counterUp({delay: 10 , time: 1500});

$(".scroll-button").click(function()
{
  let id = $(this).attr("data-id");

  let top = $("#f" + id).offset().top - 110;

  window.scrollTo({
    top: top,
    behavior: "smooth"
  });

});

let count = 0;
$(".country-toggle").click(function()
{
  if(count==0)
  {
    $("#fcountry").animate({
      height: "6070.4"
    } , "slow");

    count = 1;

    document.querySelector(".country-toggle").innerHTML = "Hide";
  }

  else {
    $("#fcountry").animate({
      height: "510"
    } , "slow");

    count = 0;

    document.querySelector(".country-toggle").innerHTML = "View All";
  }



});









let count1 = 0;
$(".india-toggle").click(function()
{
  if(count1==0)
  {
    $("#findiaa").animate({
      height: "1000"
    } , "slow");

    count1 = 1;

    document.querySelector(".india-toggle").innerHTML = "Hide";
  }

  else {
    $("#findiaa").animate({
      height: "510"
    } , "slow");

    count1 = 0;

    document.querySelector(".india-toggle").innerHTML = "View All";
  }



});
