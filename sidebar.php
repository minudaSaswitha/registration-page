
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2a06f185a2.js" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="styl.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
    <div class="main-container d-flex vh-100">
        <div class="sidebar" id="side_nav">
           <div class="header-box pt-3 px-2 pb-2 d-flex justify-content-between">
                <h1 class="fs-4  mx-5 mt-3">Event List</h1>

                
                
                <button class="btn d-md-none d-block close-btn px-1 py-0 mt-2"><i class="fa-solid fa-square-xmark fa-2x"></i></button>
                
        
                
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
            <div class="d-flex justify-content-center " id="sub">
                        <input class="btn btn-success w-100 mt-2" type="submit" value="Submit" id="btn">
                    </div>
            </ul>
            </div>
           
        </div> 
        <div class="content mx-2">
            <!-- menu_button -->
                <button class="btn d-md-none open-btn px-1 py-0 "><i class="fa-solid fa-bars fa-2x"></i></button>
                <!-- selection area -->
                    <div class="Introduction" id="con">
                                <p>මෙම තරඟය කනිෂ්ඨ, අන්තර් මධ්‍යම හා ජ්‍යෙෂ්ඨ යන අංශ ඔස්සේ භාෂා ත්‍රිත්වයෙන්ම පැවැත් වේ. ප්‍රවෘත්ති නිවේදනය, සජීවී විස්තර කථනය හා වාර්තාමය කිරීම පිළිබඳ දක්ෂතාව තරඟ කරුවාගෙන් අපේක්ෂා කෙරේ. අයදුම්කරුවන්ට නිවේදන තරඟය සඳහා පිටපතක් තෝරා ගැනීමට සිදු වේ. එම පිටපතෙහි ප්‍රවෘත්තියක්, සජීවී විස්තර කථනයක් සඳහා අදාළ මාතෘකාවක් හා වාර්තාමය ඉදිරිපත් කිරීමකට අදාළ කෙටි වාර්තාවක් ඇතුළත් වේ. පිටපත් කීපයක් අතුරින් තරඟකරු අහඹු ලෙස තෝරා ගන්නා පිටපතකට අනුව තරඟ කළ යුතු වේ. තරඟකරුට තම අවස්ථාවට විනාඩි 5කට පෙර පිටපත තෝරා ගැනීමට හැකියාව ලැබේ. නිවැරදි උච්චාරණය, හැඩ පාලනය හා භාෂාව උචිත ලෙස හැසිර වීම යන සාධක යටතේ ඇගයීමට ලක් කෙරේ.</p>
                                <div class="form-group">
                                    <label class="form-label" for="name">Name</label>
                                    <input class="form-control" type="text" id="validationDefault03" name="name" placeholder="ex:-W.P.V Nissanka" required>
                                
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="phone_number">Phone Number</label>
                                    <input class="form-control" type="tel" id="validationDefault03" name="phone_num" placeholder="ex:-0783303095" required>
                                
                                </div>
                                <div class="form-group"> 
                                    <label class="form-label" for="brthday">Birthday</label>
                                    <input class="form-control" type="date" id="validationDefault03" name="birth_day"     required>
                                </div>
                    </div>
                    <div class="Announcing" id="con">
                                <div class="form-group">
                                    <label class="form-label" for="name">Name</label>
                                    <input class="form-control" type="text" id="validationDefault03" name="name" placeholder="ex:-W.P.V Nissanka" required>
                                
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="phone_number">Phone Number</label>
                                    <input class="form-control" type="tel" id="validationDefault03" name="phone_num" placeholder="ex:-0783303095" required>
                                
                                </div>
                                <div class="form-group"> 
                                    <label class="form-label" for="brthday">Birthday</label>
                                    <input class="form-control" type="date" id="validationDefault03" name="birth_day"     required>
                                </div>
                    </div>
                    <div class="News_Editing" id="con">
                                <div class="form-group">

                                    <label class="form-label" for="name">Name</label>
                                    <input class="form-control" type="text" id="validationDefault03" name="name" placeholder="ex:-W.P.V Nissanka" required>
                                
                                </div>
                                <div class="form-group ">
                                    <label class="form-label" for="phone_number">Phone Number</label>
                                    <input class="form-control" type="tel" id="validationDefault03" name="phone_num" placeholder="ex:-0783303095" required>
                                
                                </div>
                                <div class="form-group"> 
                                    <label class="form-label" for="brthday">Birthday</label>
                                    <input class="form-control" type="date" id="validationDefault03" name="birth_day"     required>
                                </div>
                    </div>
                    <div class="Dubbing" id="con">
                                <div class="form-group">
                                    <label class="form-label" for="name">Name</label>
                                    <input class="form-control" type="text" id="validationDefault03" name="name" placeholder="ex:-W.P.V Nissanka" required>
                                
                                </div>
                                <div class="form-group ">
                                    <label class="form-label" for="phone_number">Phone Number</label>
                                    <input class="form-control" type="tel" id="validationDefault03" name="phone_num" placeholder="ex:-0783303095" required>
                                
                                </div>
                                <div class="form-group"> 
                                    <label class="form-label" for="brthday">Birthday</label>
                                    <input class="form-control" type="date" id="validationDefault03" name="birth_day"     required>
                                </div>
                    </div>
                    <div class="Sport_Commentry" id="con">
                                <div class="form-group">
                                    <label class="form-label" for="name">Name</label>
                                    <input class="form-control" type="text" id="validationDefault03" name="name" placeholder="ex:-W.P.V Nissanka" required>
                                
                                </div>
                                <div class="form-group ">
                                    <label class="form-label" for="phone_number">Phone Number</label>
                                    <input class="form-control" type="tel" id="validationDefault03" name="phone_num" placeholder="ex:-0783303095" required>
                                
                                </div>
                                <div class="form-group"> 
                                    <label class="form-label" for="brthday">Birthday</label>
                                    <input class="form-control" type="date" id="validationDefault03" name="birth_day"     required>
                                </div>
                    </div>
                    <div class="TV_Live_Presenting" id="con">
                                <div class="form-group">
                                    <label class="form-label" for="name">davdgwehehrh</label>
                                    <input class="form-control" type="text" id="validationDefault03" name="name" placeholder="ex:-W.P.V Nissanka" required>
                                
                                </div>
                                <div class="form-group ">
                                    <label class="form-label" for="phone_number">Phone Number</label>
                                    <input class="form-control" type="tel" id="validationDefault03" name="phone_num" placeholder="ex:-0783303095" required>
                                
                                </div>
                                <div class="form-group"> 
                                    <label class="form-label" for="brthday">Birthday</label>
                                    <input class="form-control" type="date" id="validationDefault03" name="birth_day"     required>
                                </div>
                    </div>
                    <div class="FM_Live_Presenting" id="con">
                                <div class="form-group">
                                    <label class="form-label" for="name">0122012</label>
                                    <input class="form-control" type="text" id="validationDefault03" name="name" placeholder="ex:-W.P.V Nissanka" required>
                                
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="phone_number">Phone Number</label>
                                    <input class="form-control" type="tel" id="validationDefault03" name="phone_num" placeholder="ex:-0783303095" required>
                                
                                </div>
                                <div class="form-group"> 
                                    <label class="form-label" for="brthday">Birthday</label>
                                    <input class="form-control" type="date" id="validationDefault03" name="birth_day"     required>
                                </div>
                    </div>
                    <div class="Technical_Knowledge" id="con">
                                <div class="form-group">
                                    <label class="form-label" for="name">sdgwdggeg</label>
                                    <input class="form-control" type="text" id="validationDefault03" name="name" placeholder="ex:-W.P.V Nissanka" required>
                                
                                </div>
                                <div class="form-group ">
                                    <label class="form-label" for="phone_number">Phone Number</label>
                                    <input class="form-control" type="tel" id="validationDefault03" name="phone_num" placeholder="ex:-0783303095" required>
                                
                                </div>
                                <div class="form-group"> 
                                    <label class="form-label" for="brthday">Birthday</label>
                                    <input class="form-control" type="date" id="validationDefault03" name="birth_day"     required>
                                </div>
                    </div>
                    <div class="Other_Events" id="con">
                                <div class="form-group">
                                    <label class="form-label" for="name">Name</label>
                                    <input class="form-control" type="text" id="validationDefault03" name="name" placeholder="ex:-W.P.V Nissanka" required>
                                
                                </div>
                                <div class="form-group ">
                                    <label class="form-label" for="phone_number">Phone Number</label>
                                    <input class="form-control" type="tel" id="validationDefault03" name="phone_num" placeholder="ex:-0783303095" required>
                                
                                </div>
                                <div class="form-group"> 
                                    <label class="form-label" for="brthday">Birthday</label>
                                    <input class="form-control" type="date" id="validationDefault03" name="birth_day"     required>
                                </div>
                    </div>
                  
                    
        </div>
   
        
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


        <script>

//sidebar navigation ekay content maruwena ekay dekama me script eken
            $(document).ready(function(){
                $('.sidebar ul li').click(function(){
                    $(this).addClass("active").siblings().
                    removeClass("active");
                    $('.content > #con').hide();
                    $($(this).data("value")).fadeIn();
                });
            })
            // $('.sidebar ul li').on('click', function(){
            //     $('.sidebar ul li.active').removeClass('active');
            //     $(this).addClass('active');
            // });
            
            //         $('.open-btn').on('click', function(){
            //             $('.sidebar').addClass('active');

            //     });
            //         $('.close-btn').on('click', function(){
            //             $('.sidebar').removeClass('active');
            // });
            $('.open-btn').on('click', function(){
                         $('.sidebar').addClass('active');

                });
                    $('.close-btn').on('click', function(){
                        $('.sidebar').removeClass('active');
                    });
          


        </script>

        



</body>
</html>