<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    
    <title>natk-museum</title>
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
   
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font/stylesheet.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- JavaScript Bundle with Popper -->
    
   
    
  
</head>
<body>
 


<main>
  <div id="form-wrapper">
    <form action="/p/quote.php" method="GET">
      <h1 id="form-title">год</h1>
      <div id="debt-amount-slider">
        <input type="radio" name="debt-amount" id="1" value="1"class="tabs_nav "data-tab="#tab1" required>
        <label for="1" data-debt-amount="1929"></label>
        <input type="radio" name="debt-amount" id="2" value="2" class="tabs_nav" data-tab="#tab2" required>
        <label for="2" data-debt-amount="1929"></label>
        <input type="radio" name="debt-amount" id="3" value="3"class="tabs_nav" data-tab="#tab3" required>
        <label for="3" data-debt-amount="1929"></label>
        <input type="radio" name="debt-amount" id="4" value="4"class="tabs_nav" data-tab="#tab4" required>
        <label for="4" data-debt-amount="1929"></label>
        <input type="radio" name="debt-amount" id="5" class="tabs_nav" value="5" data-tab="#tab5" required>
        <label for="5" data-debt-amount="1929"></label>

        <div id="debt-amount-pos"><img class="plane-ln" src="img/pngwing.com.png" alt=""></div>

      </div>
    </form>
    <div class="container">
  <div><p class="infomation-item" id="tab1">Трагедия Пушкина «Моцарт и Сальери» занимает всего десять страниц. О чем она? О зависти или о том, что «гений и злодейство — две вещи несовместные»? Есть ли оправдание Сальери, который, по версии Пушкина, отравил Моцарта?
    История предумышленного убийства рассказывается самим преступником: и Моцарта, и все происходящее мы видим глазами Сальери. П</p></div> 
  <div><p class="infomation-item" id="tab2"> information2</p></div> 
  <div><p class="infomation-item" id="tab3">information3</p></div> 
  <div><p class="infomation-item" id="tab4"> information4</p></div> 
  <div><p class="infomation-item" id="tab5"> information5</p></div> 
  </div></div>
 
</main>
<script>
const tabsBtn=document.querySelectorAll(".tabs_nav");
const tabsItems=document.querySelectorAll(".infomation-item")
  tabsBtn.forEach(function(item){
    item.addEventListener("click",function(){
      console.log("hhh");

      let currentBtn=item;
      let tabId=currentBtn.getAttribute("data-tab");
      let currentTab=document.querySelector(tabId);
      console.log(tabId);
      tabsBtn.forEach(function(item){
        item.classList.remove('active');
      });
      tabsItems.forEach(function(item){
        item.classList.remove('active');
      });
      currentTab.classList.add('active');


    });
  });
  document.querySelector('.tabs_nav').click();

    
  
</script>
<div id="form-wrapper">
  <form action="/p/quote.php" method="GET">
 
    <div id="debt-amount-slider">
      <input type="radio" name="debt-amount" id="1" value="1"class="tabs_nav "data-tab="#tab1" required>
      <label for="1" data-debt-amount="1929"></label>
      <input type="radio" name="debt-amount" id="2" value="2" class="tabs_nav" data-tab="#tab2" required>
      <label for="2" data-debt-amount="1931"></label>
      <input type="radio" name="debt-amount" id="3" value="3"class="tabs_nav" data-tab="#tab3" required>
      <label for="3" data-debt-amount="1937"></label>
      <input type="radio" name="debt-amount" id="4" value="4"class="tabs_nav" data-tab="#tab4" required>
      <label for="4" data-debt-amount="1939"></label>
      <input type="radio" name="debt-amount" id="5" class="tabs_nav" value="5" data-tab="#tab5" required>
      <label for="5" data-debt-amount="1941"></label>

      <div id="debt-amount-pos"><img class="plane-ln" src="img/00004505.png" alt=""></div>

    </div>
  </form>
  <div class="container">
    <div class="container-line">
    <div class="infomation-item" id="tab1">
  <div class="infomation-item-block1"> <img src="img/Снимок экрана (160).png" width="200px" alt=""><p >Решением Совета Народных Комисаров (правительство СССР) от 25 сентября 1929 г. №1276 был образован Новосибирский машиностроительный техникум, который находился в подчинении Народного комиссариата тяжелой промышленности.
    Техникум арендовал полтора этажа в здании школы ФЗУ на станции Кривощёково. Первым директором техникума в 1929-1932 г.г.  был Акишева М.Г. 
   
    </p>
  <hr></div>
  <hr>
  <div class="infomation-item-block2">
    <p> Занятия в техникуме начались 15 ноября 1929 г. Первый набор студентов составил 60 человек, затем в январе и мае 1930 года было принято еще по 60 человек. Здесь готовили специалистов среднего звена по инструментальному производству, литейному производству, холодной обработке металлов резанием. </p>
  <img src="img/1.jpg" alt="">
    </div>
  </div> 
  <div class="infomation-item" id="tab2"> 
      <div class="block1">
      <img src="img/gwUHdIWWeT4.jpg" width="200px" alt=""><p >С 20 февраля 1931 г. Учреждение стало именоваться «Новосибирский техникум сельскохозяйственных машин», а с 8 апреля 1933 – «Новосибирский техникум машиностроения». С 1933 по 1936 г. директором техникума был Косырев И.П.
        В 1936-1937 гг. в Новосибирске на базе завода горного оборудования был создан авиационный завод. В ноябре 1937 с заводского аэродрома взлетел первый самолет. Развивающееся предприятие остро нуждалось в квалифицированных рабочих, техниках, инженерах. 
       За две пятилетки техникум выпустил 430 специалистов.</p>
       </div> 
    </div>
    <div class="infomation-item" id="tab3"> 
      <div class="block1">
      <img src="img/1937second.jpg" width="200px" alt="">
      <p > Уже в январе 1937 г. машиностроительный техникум был передан в ведение Глававиапрома и переименован в авиационный техникум, а с осени стал готовить специалистов по вновь открытым специальностям: конструирование самолетов, производство самолетов. П</p>
    </div>
    <hr>
    <div class="block2">
      <img src="img/1937.jpg" alt="">
      <p>В эти годы в жизни учебного заведения произошли важные события. В 1937 году машиностроительный техникум решением правительства переименован в авиационный. 
        1 мая 1938 года заложен первый камень в фундамент ныне существующего здания учебного корпуса колледжа. Активную помощь строителям оказывают преподаватели и учащиеся техникума.</p>
    </div></div> 
      <div class="infomation-item" id="tab4"> <img src="img/4.jpg" width="200px" alt=""><p > строится здание учебного корпуса авиационного техникума. Активную помощь строителям оказывают преподаватели и учащиеся техникума.1 сентября 1940года:
        Учащиеся вошли в светлые просторные аудитории, оборудованные кабинеты и лаборатории.
        П</p></div> 
        <div class="infomation-item" id="tab5"> <img src="img/" width="200px" alt=""><p > Трагедия Пушкина «Моцарт и Сальери» занимает всего десять страниц. О чем она? О зависти или о том, что «гений и злодейство — две вещи несовместные»? Есть ли оправдание Сальери, который, по версии Пушкина, отравил Моцарта?
          Государственный Русский музей - один из крупнейших мировых музеев и, пожалуй, единственный в стране, где в таком полном объеме представлены сокровища отечественной культуры. Это не только живопись, графика, скульптура, но и произведения декоративно-прикладного искусства. Сегодня собрание музея насчитывает около 400 тысяч экспонатов.

          Впервые двери Русского музея были открыты для посетителей 7 марта 1898 г., через три года после того, как 13 апреля 1895 г. вышел специальный указ Николая II об учреждении Русского музея императора Александра III. Тем же указом для размещения картин и скульптуры русской школы отводилось одно из красивейших зданий Петербурга - Михайловский дворец, сооруженный в 1825 г. знаменитым архитектором Карлом Росси для великого князя Михаила Павловича - сына императора Павла I. С целью переоборудования дворца был объявлен конкурс, который выиграл молодой архитектор Василий Свиньин. Перед ним стояла сложная задача превратить покои, предназначенные для частной жизни, в залы общественного назначения, удобные для показа картин и произведений. Одновременно с перестройкой и реставрацией дворцовых залов формировалась коллекция музея, основой которой стали произведения, переданные из музея Академии художеств, Эрмитажа, загородных царских резиденций и крупных частных коллекций. П</p></div> 
    </div> 
</div>
</div>
</body>
</html>
