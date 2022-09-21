
<?php  session_start();?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styl.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Sinhala&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Sinhala&display=swap" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <title>Document</title>
</head>
<style>
    .sin{
        font-family: 'Noto Sans Sinhala', sans-serif;
        font-weight: 500;
        font-size: 1rem;
    }
    .close-btn{
        margin-top: 5px;
    }
    
  

    

</style>

<body >
    
    <div class="main-container d-flex vh-100">
        <div class="sidebar" id="side_nav">
           <div class="header-box pt-3 px-2 pb-2 d-flex justify-content-between">
                <h1 class="fs-4 mt-3 d-flex ms-4">Competitions</h1>

                <button class="btn border-0 d-md-none d-block close-btn"><i class="fa-solid fa-rectangle-xmark fa-2x"></i></button>
               
              
                
        
                
           </div>

           
            
           <div>
            
            <ul class="list-unstyled px-2 ">
            <li data-value=".Introduction" class="active"><a href="#" class="text-decoration-none px-3 py-2 mb-2 d-block  ">Instructions</a></li>
            <li data-value=".Announcing"><a href="#" class="text-decoration-none px-3 py-2 mb-2 d-block ">Announcing</a></li>
            <li data-value=".News_Editing"><a href="#" class="text-decoration-none px-3 py-2 mb-2 d-block ">News Editing</a></li>
            <li data-value=".Dubbing"><a href="#" class="text-decoration-none px-3 py-2 mb-2 d-block ">Dubbing</a></li>
            <li data-value=".Sport_Commentry"><a href="#" class="text-decoration-none px-3 py-2 mb-2 d-block ">Sport Commentry</a></li>
            <li data-value=".TV_Live_Presenting"><a href="#" class="text-decoration-none px-3 py-2 mb-2 d-block ">TV Live Presenting</a></li>
            <li data-value=".FM_Live_Presenting"><a href="#" class="text-decoration-none px-3 py-2 mb-2 d-block ">FM Live Presenting</a></li>
            <li data-value=".Technical_Knowledge"><a href="#" class="text-decoration-none px-3 py-2 mb-2 d-block ">Technical Knowledge</a></li>
            <li data-value=".Other_Events"><a href="#" class="text-decoration-none px-3 py-2 mb-2 d-block ">Other Events</a></li>
            
            <input class="btn btn-secondary w-100" form="event_form" id="btn" type="submit" name="submit" value="Submit" id="btn">
            </ul>
            </div>
           
        </div> 
        <div class="content mx-2 pb-4">

            <!-- menu_button -->
                <button class="btn border-0 d-md-none open-btn mt-3 "><i class="fa-solid fa-bars fa-2x"></i></button>

                <!-- selection area -->
               
                <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                             <script>
                                Swal.fire({
                                icon: 'success',
                                title: 'Registered',
                                confirmButtonText: "next",
                                html: '<div>your id is <?php echo $_SESSION['status']; ?> <br />One step to complete</div>',
                               
                                
                                confirmButtonColor: "#4267B2",
                                }).then(function () {
                                    window.location = "home.html";
                                    
                                });
                            </script>
                        <?php
                        unset($_SESSION['status']);
                    }
                ?>
               
                <form class="frm mt-5 pt-2" action="cand_events.php" method="POST" id="event_form">
                    <div class="Introduction" id="con">
                    

                    </div>
                    <div class="Announcing pb-3" id="con">
                        <p class="sin">මෙම තරඟය කනිෂ්ඨ, අන්තර් මධ්‍යම හා ජ්‍යෙෂ්ඨ යන අංශ ඔස්සේ භාෂා ත්‍රිත්වයෙන්ම පැවැත් වේ. ප්‍රවෘත්ති නිවේදනය, සජීවී විස්තර කථනය හා වාර්තාමය කිරීම පිළිබඳ දක්ෂතාව තරඟ කරුවාගෙන් අපේක්ෂා කෙරේ. අයදුම්කරුවන්ට නිවේදන තරඟය සඳහා පිටපතක් තෝරා ගැනීමට සිදු වේ. එම පිටපතෙහි ප්‍රවෘත්තියක්, සජීවී විස්තර කථනයක් සඳහා අදාළ මාතෘකාවක් හා වාර්තාමය ඉදිරිපත් කිරීමකට අදාළ කෙටි වාර්තාවක් ඇතුළත් වේ. පිටපත් කීපයක් අතුරින් තරඟකරු අහඹු ලෙස තෝරා ගන්නා පිටපතකට අනුව තරඟ කළ යුතු වේ. තරඟකරුට තම අවස්ථාවට විනාඩි 5කට පෙර පිටපත තෝරා ගැනීමට හැකියාව ලැබේ. නිවැරදි උච්චාරණය, හැඩ පාලනය හා භාෂාව උචිත ලෙස හැසිර වීම යන සාධක යටතේ ඇගයීමට ලක් කෙරේ.</p>
                        <div class="input-group"  data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-custom-class="custom-tooltip"
                            data-bs-title="Select the language medium also"
                        data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-custom-class="custom-tooltip"
                            data-bs-title="Select the language medium also">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="event[]" value="announcing" aria-label="Checkbox for following text input">
                            </div>
                            <label class="input-group-text" for="inputGroupSelect01">medium</label>
                            <select class="form-select" id="inputGroupSelect01" name="medium[]" >
                                <option hidden ></option>
                                <option value="sinhala">Sinhala</option>
                                <option value="english">English</option>
                                <option value="tamil">Tamil</option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="News_Editing pb-3" id="con">
                            <p class="sin">මෙම තරඟය භාෂා ත්‍රිත්වයෙන් ම කනිෂ්ඨ අන්තර් මධ්‍යම හා ජ්‍යෙAෂAඨ යන අංශ තුනෙන් පැවැත්වේ. මෙහිදී පුවත්පත් ලිපියක් හා වාර්තාවක් සංස්කරණය කිරිම අපේක්ෂා කෙරේ. මෙහිදී තරඟකරුට ලැඛෙන මාතෘකාවක් ඔස්සේ පුවත්පතකට ලිපියක් සකස් කිරීම හෝ තමාට ලැඛෙන සිද්ධියකට අදාළ තොරතුරු සමූහයක් නිසි පරිදි සංස්කරණය කරමින් පුවත්පත් වාර්තාවක් සකස් කිරීමට සිදුවේ. නිවරදි ව්‍යාකරණ, භාෂාව නිසි ලෙස භාවිත කිරීම ආදී සාධකවලට අනුව තරඟකරුවන් ඇගයීමට ලක් කෙරේ.</p>
                            <div class="input-group"  data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-custom-class="custom-tooltip"
                            data-bs-title="Select the language medium also">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="event[]" value="editing" aria-label="Checkbox for following text input">
                            </div>
                            <label class="input-group-text" for="inputGroupSelect01">medium</label>
                            <select class="form-select" id="inputGroupSelect01" name="medium[]" >
                                <option value="" hidden>select</option>
                                <option value="sinhala">Sinhala</option>
                                <option value="english">English</option>
                                <option value="tamil">Tamil</option>
                            </select>
                        </div>

                    </div>
                    <div class="Dubbing pb-3" id="con">
                               <p class="sin">මෙම තරඟය භාෂා ත්‍රිත්වයෙන් විවෘත තරගයක් ලෙස පැවැත්වේ.මෙහිදී අහඹු ලෙස ලබාදෙන වීඩියෝ දර්ශනය සඳහා තම හ~ උචිත අයුරින් මුසු කිරීම අපේක්ෂා කෙරේ. අහඹු ලෙස ලැඛෙන වීඩියෝ දර්ශනය සඳහා හ~ මුසු කිරීමට ප්‍රථම ව, පෙර පුහුණුවීමක් සඳහා තරඟකරු හට විනාඩි 5ක කාලයක් ලබා දේ. </p>

                               <div class="input-group"  data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-custom-class="custom-tooltip"
                            data-bs-title="Select the language medium also">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="event[]" value="dubbing" aria-label="Checkbox for following text input">
                            </div>
                            <label class="input-group-text" for="inputGroupSelect01">medium</label>
                            <select class="form-select" id="inputGroupSelect01" name="medium[]" >
                                <option value="" hidden>select</option>
                                <option value="sinhala">Sinhala</option>
                                <option value="english">English</option>
                                <option value="tamil">Tamil</option>
                            </select>
                        </div>

                    </div>
                    <div class="Sport_Commentry pb-3 " id="con">
                                <p class="sin">මෙම තරගය භාෂා ත්‍රිත්වයෙන් විවෘත තරගයක් ලෙස පැවැත්වෙන අතර ක්‍රීඩාවක උණුසුම, උද්යෝගී බව ප්‍රේක්ෂකයන් තුළ ජනිත වන අයුරින් සිය දක්ෂතාවය පෙන්වීම මෙහිදී අපේක්ෂා කෙරේ.
                                මෙහිදී අහඹු ලෙස මාතෘකාවක් තෝරා ගත යුතු අතර ඒ සඳහා පුහුණුවීමට          විනාඩි 5 ක කාලයක් හිමිවේ. මෙහිදී ක්‍රිකට් තරඟයක්, වොලිබෝල් තරඟයක්, පාපන්දු තරඟයක් යන තරඟ අවස්ථා අතුරින් එක් තරඟයක් තෝරා ගත යුතු අතර ඒ තෝරා ගන්නා තරඟ අවස්ථාවට අදාළ වීඩියෝව තරඟකරුට ප්‍රදර්ශනය කෙරේ. එම දර්ශනයට අදාලව තරගකරු විසින් විස්තර විචාරය සිදුකළ යුතුවේ. ක්‍රීඩාව පිළිබඳ ව ඇති දැනුම උචිත ලෙස හැසිරවීම, තරඟයක ඇති උණුසුම සහ ජවය ඉස්මතු වන පරිදි විචාරය කිරීම හා තරඟයේ තොරතුරු නිසි පරිදි යාවත්කාලීන කිරීම වැනි සාධකවලට අදාළ ව ලකුණු ලබාදීම සිදුවේ. </p>
                        <div class="input-group"  data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-custom-class="custom-tooltip"
                            data-bs-title="Select the language medium also">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="event[]" value="sportCommentry" aria-label="Checkbox for following text input">
                            </div>
                            <label class="input-group-text" for="inputGroupSelect01">medium</label>
                            <select class="form-select" id="inputGroupSelect01" name="medium[]" >
                                <option value="" hidden>select</option>
                                <option value="sinhala">Sinhala</option>
                                <option value="english">English</option>
                                <option value="tamil">Tamil</option>
                            </select>
                        </div>
                    </div>
                    <div class="TV_Live_Presenting pb-3" id="con">
                        <p class="sin">
                        සිංහල රැ ඉංග්‍රීසි යන භාෂා ද්විත්වයෙන් පමණක් මෙම තරගය පැවැත්වේග මෙය නව තරග අංශයකි. මෙහිදී ඔබ විසින් රූපවාහිනියක සජීවී වැඩසටහනක් ඉදිරිපත් කිරීමක් කළ යුතුය. මෙම තරගය වයස් කාණ්ඩ දෙකක් යටතේ පැවැත්වේග එම වයස් කාණ්ඩ දෙක වන්නේල <br>
                        1-	අන්තර් මධ්‍යම අංශය     -    9,10,11 ශ්‍රේණි <br>
                        2-	ජ්‍යෙෂ්ඨ අංශය             -    12,13 ශ්‍රේණි <br>
                        මෙම තරගය සඳහා ඔබ පාසලින් එක් වයස් කාණ්ඩයක් යටතේ තරගකරුවන් දෙදෙනෙකු බැගින්ල වයස් කාණ්ඩ දෙකෙන්  තරගකරුවන් සතර දෙනෙකුට ඉදිරිපත් වියහැකග තරග දිනයේදී අප විසින් ඔබට ලබාදෙන මාතෘකාවට අදාලව ඔබගේ ඉදිරිපත් කිරීම කළ යුතුයග ඉදිරිපත් කිරීම විනාඩි පහකට නොඅඩු විය යුතුයග
                        </p>
                        <div class="input-group"  data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-custom-class="custom-tooltip"
                            data-bs-title="Select the language medium also">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="event[]" value="TVPresenting" aria-label="Checkbox for following text input">
                            </div>
                            <label class="input-group-text" for="inputGroupSelect01">medium</label>
                            <select class="form-select" id="inputGroupSelect01" name="medium[]" >
                                <option value="" hidden >select</option>
                                <option value="sinhala">Sinhala</option>
                                <option value="english">English</option>
                                <option value="tamil">Tamil</option>
                            </select>
                        </div>
                    </div>
                    <div class="FM_Live_Presenting pb-3" id="con">
                        <p class="sin">
                        සිංහල රැ ඉංග්‍රීසි යන භාෂා ද්විත්වයෙන් පමණක් මෙම තරගය පැවැත්වේග මෙය නව තරග අංශයකි. මෙහිදී ඔබ විසින් රූපවාහිනියක සජීවී වැඩසටහනක් ඉදිරිපත් කිරීමක් කළ යුතුය. මෙම තරගය වයස් කාණ්ඩ දෙකක් යටතේ පැවැත්වේග එම වයස් කාණ්ඩ දෙක වන්නේල<br>
                        1-	අන්තර් මධ්‍යම අංශය     -    9,10,11 ශ්‍රේණි <br>
                        2-	ජ්‍යෙෂ්ඨ අංශය             -    12,13 ශ්‍රේණි <br>
                        මෙම තරගය සඳහා ඔබ පාසලින් එක් වයස් කාණ්ඩයක් යටතේ තරගකරුවන් දෙදෙනෙකු බැගින්ල වයස් කාණ්ඩ දෙකෙන්  තරගකරුවන් සතර දෙනෙකුට ඉදිරිපත් වියහැකග තරග දිනයේදී අප විසින් ඔබට ලබාදෙන මාතෘකාවට අදාලව ඔබගේ ඉදිරිපත් කිරීම කළ යුතුයග ඉදිරිපත් කිරීම විනාඩි පහකට නොඅඩු විය යුතුයග
                        </p>
                        <div class="input-group"  data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-custom-class="custom-tooltip"
                            data-bs-title="Select the language medium also">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="event[]" value="FMPresenting" aria-label="Checkbox for following text input">
                            </div>
                            <label class="input-group-text" for="inputGroupSelect01">medium</label>
                            <select class="form-select" id="inputGroupSelect01" name="medium[]" >
                                <option value="" hidden>select</option>
                                <option value="sinhala">Sinhala</option>
                                <option value="english">English</option>
                                <option value="tamil">Tamil</option>
                            </select>
                        </div>
                    </div>
                    <div class="Technical_Knowledge pb-3" id="con">
                        <p class="sin">
                        මෙම තරඟය සිසුන්ගේ තාක්ෂණික  දැනුම උරගා බැලීම සඳහා පවත්වනු ලැබේ.      මෙය ද විවෘත තරගයක් වන අතර සිංහල රැ ඉංග්‍රීසි යන භාෂා ද්විත්වයෙන් පමණක් තරඟය පැවැත්වේ. ප්‍රශ්නපත්‍රය සකස් වෙනුයේ සන්නිවේදන උපකරණ වලට අදාළ තාක්ෂණික කරුණු සහ සරල ඉලෙක්ට්‍රොනික තාක්ෂණික කරුණු පදනම් කරගෙනය. මෙහිදී තරඟකරුවන්ට කෙටි ප්‍රශ්න පත්‍රයක් සඳහා පිළිතුරු සැපයීමට සිදුවේ. ප්‍රශ්න පත්‍රය කෙටි බහුවරණ ප්‍රශ්නපත්‍රයකි.
                        </p>
                        <div class="input-group"  data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-custom-class="custom-tooltip"
                            data-bs-title="Select the language medium also">
                            <div class="input-group-text">
                                <input class="form-check-input mt-0" type="checkbox" name="event[]" value="TechnicalKnowledge" aria-label="Checkbox for following text input">
                            </div>
                            <label class="input-group-text" for="inputGroupSelect01">medium</label>
                            <select class="form-select" id="inputGroupSelect01" name="medium[]" >
                                <option value="" hidden>select</option>
                                <option value="sinhala">Sinhala</option>
                                <option value="english">English</option>
                                <option value="tamil">Tamil</option>
                            </select>
                        </div>
                    </div>
                    <div>
                    
                    </div>


                

                </form> 

               
                    
        </div>
   
        
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <script>

//sidebar navigation ekay content maruwena ekay dekama me script eken
            $(document).ready(function(){
                $('.sidebar ul li').click(function(){
                    $(this).addClass("active").siblings().
                    removeClass("active");
                    $('.frm > #con').hide();
                    $($(this).data("value")).fadeIn();
                });
            })

            $('.open-btn').on('click', function(){
                         $('.sidebar').addClass('active');

                });
                    $('.close-btn').on('click', function(){
                        $('.sidebar').removeClass('active');
                    });
          


        </script>

        <script>
            const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
            const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

        </script>
        



</body>
</html>
