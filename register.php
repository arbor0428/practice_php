<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veggie Life_Register</title>
    <?php include_once "default.php"; ?>
</head>
<body>
    <?php include_once "inc/header.php"; ?>
    <div class="sub_visual register_visual">
        <p>Veggie life</p>
        <h2>Register</h2>
        <div class="linedeco">
            <span class="line01"></span>
            <span class="line02"></span>
            <span class="line03"></span>
        </div>
    </div>
    <div id="register_container">
        <div class="registerBox"> 
            <form method="post" action="insert.php">
                <div class="register_center">
                    <div class="txt_line" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500"></div>
                    <h2 class="title">Register</h2>
                    <h3>Veggie Life</h3>
                    <p class="detail">Please fill in the form below.</p>
                    <p class="info">Essential Information</p>
                    <div class="input_box">
                        <label for="name"><span>*</span>Name</label>
                        <input id="name" name="name" type="text" maxlength="5" required placeholder="Full Name">
                    </div>
                    <div class="input_box">
                        <label for="id"><span>*</span>Id</label>
                        <input id="id" name="id" type="text" required placeholder="Email Address">
                    </div>
                    <div class="input_box">
                        <label for="pass"><span>*</span>Password</label>
                        <input id="pass" name="password" type="password" maxlength="16" required placeholder="Password">
                    </div>
                    <div class="input_box">
                        <label for="repass"><span>*</span>Password Again</label>
                        <input id="repass" name="repass" type="password" maxlength="16" required placeholder="Password Again.">
                    </div>
                    <div class="input_box">
                        <label for="phone"><span>*</span>Phone Number</label>
                        <input id="phone" name="phone" type="text"  maxlength="11" required placeholder="Only Numbers">
                    </div>
                    <div class="checkbox">
                        <input id="phonecheck" name="phonecheck" type="checkbox">
                        <label for="phonecheck">I agree to receive SMS information/events.</label>
                    </div>
                    <div class="input_box address">
                        <label for="postcode"><span>*</span>Address</label>
                        <input type="text" id="postcode" name="addr1" placeholder="Zip Code">
                        <input type="button" id="find" onclick="sample4_execDaumPostcode()" value="Find Zip Code"></br>
                        <input type="text" id="roadAddress" name="addr2" placeholder="Road Name Address"></br>
                        <input type="text" id="jibunAddress" name="addr3" placeholder="Land-Lot Based Address"></br>
                        <span id="guide" style="color:#999;display:none"></span></br>
                        <input type="text" id="detailAddress" name="addr4" placeholder="Detailed Address"></br>
                        <input type="text" id="extraAddress" name="addr5" placeholder="Reference"></br>
                    </div>
                    <p class="info">Additional Information</p>
                    <div class="input_box">
                        <label for="birth"><span>*</span>Date of Birth</label>
                        <input type="date" name="birth">
                    </div>
                    <div class="input_box02">
                        <label for="gender"><span>*</span>Gender</label>
                        <div class="gender">
                            <input id="male" name="gender" type="radio" value="Male"><span>Male</span>
                            <input id="female" name="gender" type="radio" value="Female"><span>Female</span>
                        </div>
                    </div>
                    <div class="input_box">
                        <label for="channel"><span>*</span>Where did you hear about us?</label>
                        <select id="channel" name="sel">
                            <option>select</option>
                            <option>A friend</option>
                            <option>Google</option>
                            <option>Blog Post</option>
                            <option>Instagram</option>
                            <option>News Article</option>
                        </select>
                    </div>
                    <div class="agreebox">
                        <input id="agreecheck" name="agreecheck" type="checkbox">
                        <span class="agree">By clicking here, I agree to <button class="terms">the terms of service Register.</button></span>
                    </div>
                    <input id="register_btn" type="submit" value="Register">
                </div>
            </form>
            <div class="termWrap">
                <div class="term">
                    <a class="t-close" href="#"><img src="img/register/close.png"></a>
                    <div class="term-text">
                        <h4>Veggie Life Terms of Use</h4>
                        <div>
                            <p>Welcome to Veggie Life and our Terms of Use (the “Agreement”). This Agreement is important and contains terms and conditions that affect your legal rights, so please read it carefully. If you reside outside the United States, additional terms and conditions may be applicable to you that either supplement or replace certain provisions in this Agreement. Please visit our International Addendum to see whether these additional terms and conditions apply to you.</p>
                            <p>By accessing or using the websites, mobile applications or blogs (collectively, the “Site”) provided by Veggie Life, Inc. or our subsidiaries or affiliates (herein referred to as “Veggie Life,” “we,” “us” or “our”), including, without limitation, pursuant to which we offer beauty advice and tips and make available our unique beauty products or other products for purchase (the “Products”) (collectively, with the Site, the “Services”), you agree to be bound by the terms and conditions contained in this Agreement and all other terms incorporated herein by reference. Some of the Services may be subject to additional terms and conditions we specify from time to time; your use of such Services is subject to those additional terms and conditions, which are incorporated into this Agreement by reference. This Agreement applies to all users of the Site.</p>
                            <p>We reserve the right, at our sole discretion, to change or modify portions of this Agreement at any time. If we do this, we will post the changes on this page and will indicate at the top of this page the date this Agreement was last revised. You may read a current, effective copy of this Agreement at any time by selecting the “Terms of Use” link on the Site. We will also notify you of any material changes either through a pop-up notice, e-mail or through other reasonable means. Your continued use of the Site after any such changes constitutes your acceptance of the new Agreement. You should periodically visit this page to review the current Agreement so you are aware of any revision to which you are bound. If you do not agree to abide by this or any future Agreement, do not use or access (or continue to use or access) the Site.</p>
                        </div>
                    </div>
                </div>
            </div>
            <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
            <script>
                //본 예제에서는 도로명 주소 표기 방식에 대한 법령에 따라, 내려오는 데이터를 조합하여 올바른 주소를 구성하는 방법을 설명합니다.
                function sample4_execDaumPostcode() {
                    new daum.Postcode({
                        oncomplete: function(data) {
                            // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                            // 도로명 주소의 노출 규칙에 따라 주소를 표시한다.
                            // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                            var roadAddr = data.roadAddress; // 도로명 주소 변수
                            var extraRoadAddr = ''; // 참고 항목 변수

                            // 법정동명이 있을 경우 추가한다. (법정리는 제외)
                            // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
                            if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
                                extraRoadAddr += data.bname;
                            }
                            // 건물명이 있고, 공동주택일 경우 추가한다.
                            if(data.buildingName !== '' && data.apartment === 'Y'){
                            extraRoadAddr += (extraRoadAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                            }
                            // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
                            if(extraRoadAddr !== ''){
                                extraRoadAddr = ' (' + extraRoadAddr + ')';
                            }

                            // 우편번호와 주소 정보를 해당 필드에 넣는다.
                            document.getElementById('postcode').value = data.zonecode;
                            document.getElementById("roadAddress").value = roadAddr;
                            document.getElementById("jibunAddress").value = data.jibunAddress;
                            
                            // 참고항목 문자열이 있을 경우 해당 필드에 넣는다.
                            if(roadAddr !== ''){
                                document.getElementById("extraAddress").value = extraRoadAddr;
                            } else {
                                document.getElementById("extraAddress").value = '';
                            }

                            var guideTextBox = document.getElementById("guide");
                            // 사용자가 '선택 안함'을 클릭한 경우, 예상 주소라는 표시를 해준다.
                            if(data.autoRoadAddress) {
                                var expRoadAddr = data.autoRoadAddress + extraRoadAddr;
                                guideTextBox.innerHTML = '(Expected Road Name Address : ' + expRoadAddr + ')';
                                guideTextBox.style.display = 'block';

                            } else if(data.autoJibunAddress) {
                                var expJibunAddr = data.autoJibunAddress;
                                guideTextBox.innerHTML = '(Expeced Land-Lot Based Address : ' + expJibunAddr + ')';
                                guideTextBox.style.display = 'block';
                            } else {
                                guideTextBox.innerHTML = '';
                                guideTextBox.style.display = 'none';
                            }
                        }
                    }).open();
                }
            </script>
        </div>
    </div>
    <?php include_once "inc/footer.php"; ?>
</body>
</html>