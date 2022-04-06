<?php include'./includes/header.php'?> <!-- Хэдер -->
    <div class="wrapper">
        <main class="main">

            <button class="popup-btn test">Кнопочка</button>

<!--        TODO: переход на СПАСИБО-->
            <div class="popup" id="popup">
                <div class="popup__body">
                    <h3 class="popup__title">Получите консультацию по программе</h3>
                    <form id="consultation" action="" method="post">
                        <div class="popup__item">
                            <input type="text" id="popup-name" class="name" name="name" placeholder="Ваше имя" required/>
                        </div>

                        <div class="popup__item">
                            <input type="tel" id="popup-phone" class="phone" name="phone" placeholder="Ваш телефон" required/>
                        </div>

                        <button id="popup__btn" type="button" class="popup__btn-container">Консультация онлайн</button>
                        <p class="popup__info">
                            *отправляя формы на данном сайте, вы даете согласие
                            на обработку персональных данных в соответствии с 152-ФЗ
                        </p>

                        <div class="popup__close-btn popup__close">
                            <svg class="popup__close" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="popup__close" fill-rule="evenodd" clip-rule="evenodd" d="M20.781 3.21895C20.8508 3.28862 20.9062 3.37138 20.944 3.4625C20.9818 3.55362 21.0013 3.6513 21.0013 3.74995C21.0013 3.8486 20.9818 3.94629 20.944 4.0374C20.9062 4.12852 20.8508 4.21128 20.781 4.28095L4.28097 20.781C4.14014 20.9218 3.94913 21.0009 3.74997 21.0009C3.55081 21.0009 3.3598 20.9218 3.21897 20.781C3.07814 20.6401 2.99902 20.4491 2.99902 20.25C2.99902 20.0508 3.07814 19.8598 3.21897 19.719L19.719 3.21895C19.7886 3.14911 19.8714 3.09369 19.9625 3.05588C20.0536 3.01807 20.1513 2.99861 20.25 2.99861C20.3486 2.99861 20.4463 3.01807 20.5374 3.05588C20.6285 3.09369 20.7113 3.14911 20.781 3.21895Z" fill="#717171"/>
                                <path class="popup__close" fill-rule="evenodd" clip-rule="evenodd" d="M3.22034 3.22034C3.1505 3.29001 3.09508 3.37277 3.05727 3.46389C3.01946 3.55501 3 3.65269 3 3.75134C3 3.84999 3.01946 3.94767 3.05727 4.03879C3.09508 4.12991 3.1505 4.21267 3.22034 4.28234L19.7203 20.7823C19.8612 20.9232 20.0522 21.0023 20.2513 21.0023C20.4505 21.0023 20.6415 20.9232 20.7823 20.7823C20.9232 20.6415 21.0023 20.4505 21.0023 20.2513C21.0023 20.0522 20.9232 19.8612 20.7823 19.7203L4.28234 3.22034C4.21267 3.1505 4.12991 3.09508 4.03879 3.05727C3.94767 3.01946 3.84999 3 3.75134 3C3.65269 3 3.55501 3.01946 3.46389 3.05727C3.37277 3.09508 3.29001 3.1505 3.22034 3.22034V3.22034Z" fill="#717171"/>
                            </svg>
                        </div>
                    </form>
                </div>
        </main>
        <?php include'./includes/footer.php'?> <!-- Футер -->
    </div>
