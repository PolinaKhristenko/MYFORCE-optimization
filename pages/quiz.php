<?php include'../includes/header.php'?>
    <main class="quiz__container" id="quiz">
        <section class="container main">
            <div id="step-1">
                <form action="">
                    <h2>Узнайте подходит ли ваш бизнес к закону ФЗ№ 46 от 8 марта 2022 года</h2>
                    <div class="QuizItem">
                        <div class="QuizTitle">Как к вам обращаться</div>
                        <input type="text" id="quizName" class="quiz-name" name="quiz-name" placeholder="Ваше имя" required/>
                    </div>
                    <div class="QuizTitle">Ваш статус</div>
                    <div class="QuizLabelBlock">
                        <label class="QuizLabel">
                            <input class="QuizLabelInp" type="radio" name="quiz-status" value="Действующий предприниматель">
                            <span class="QuizLabelSpan"></span>
                            Действующий предприниматель
                        </label>
                    </div>
                    <div class="QuizLabelBlock">
                        <label class="QuizLabel">
                            <input class="QuizLabelInp" type="radio" name="quiz-status" value="Инвестор (хочу открыть бизнес)">
                            <span class="QuizLabelSpan"></span>
                            Инвестор (хочу открыть бизнес)
                        </label>
                    </div>
                </form>

                <div class="quiz__footer">
                    <div class="progress-bar">
                        Шаг 1/4
                        <div class="progress-bar__container">
                            <div class="progress-bar__line" id="progress-bar"></div>
                        </div>
                    </div>
                    <button class="btn__pink btn-next">
                        Далее
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="11" cy="11" r="10.5" stroke="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.1875 10.3125C6.00516 10.3125 5.8303 10.3849 5.70136 10.5139C5.57243 10.6428 5.5 10.8177 5.5 11C5.5 11.1824 5.57243 11.3572 5.70136 11.4862C5.8303 11.6151 6.00516 11.6875 6.1875 11.6875H14.1529L11.2007 14.6383C11.1368 14.7022 11.0861 14.7781 11.0515 14.8616C11.0169 14.9451 10.9991 15.0346 10.9991 15.125C10.9991 15.2154 11.0169 15.3049 11.0515 15.3884C11.0861 15.472 11.1368 15.5478 11.2007 15.6118C11.2647 15.6757 11.3406 15.7264 11.4241 15.761C11.5076 15.7956 11.5971 15.8134 11.6875 15.8134C11.7779 15.8134 11.8674 15.7956 11.9509 15.761C12.0344 15.7264 12.1103 15.6757 12.1742 15.6118L16.2992 11.4868C16.3633 11.4229 16.4141 11.347 16.4487 11.2635C16.4834 11.18 16.5012 11.0904 16.5012 11C16.5012 10.9096 16.4834 10.82 16.4487 10.7365C16.4141 10.653 16.3633 10.5771 16.2992 10.5133L12.1742 6.38826C12.1103 6.32434 12.0344 6.27364 11.9509 6.23904C11.8674 6.20445 11.7779 6.18665 11.6875 6.18665C11.5971 6.18665 11.5076 6.20445 11.4241 6.23904C11.3406 6.27364 11.2647 6.32434 11.2007 6.38826C11.1368 6.45219 11.0861 6.52807 11.0515 6.61159C11.0169 6.6951 10.9991 6.78462 10.9991 6.87501C10.9991 6.96541 11.0169 7.05492 11.0515 7.13844C11.0861 7.22196 11.1368 7.29784 11.2007 7.36176L14.1529 10.3125H6.1875Z" fill="white"/>
                        </svg>
                    </button>
                </div>
            </div>

            <div id="step-2" class="hidden">
                <h2>Узнайте подходит ли ваш бизнес к закону ФЗ№ 46 от 8 марта 2022 года</h2>
                <form action="">
                    <div class="QuizTitle">Ваша сфера деятельности</div>
                    <div class="QuizLabelBlock">
                        <label class="QuizLabel">
                            <input class="QuizLabelInp" type="radio" name="activities" value="Торговля">
                            <span class="QuizLabelSpan"></span>
                            Торговля
                        </label>
                    </div>
                    <div class="QuizLabelBlock">
                        <label class="QuizLabel">
                            <input class="QuizLabelInp" type="radio" name="activities" value="Недвижимость">
                            <span class="QuizLabelSpan"></span>
                            Недвижимость
                        </label>
                    </div>
                    <div class="QuizLabelBlock">
                        <label class="QuizLabel">
                            <input class="QuizLabelInp" type="radio" name="activities" value="Консалтинг">
                            <span class="QuizLabelSpan"></span>
                            Консалтинг
                        </label>
                    </div>
                    <div class="QuizLabelBlock">
                        <label class="QuizLabel">
                            <input class="QuizLabelInp" type="radio" name="activities" value="Банкротство">
                            <span class="QuizLabelSpan"></span>
                            Банкротство
                        </label>
                    </div>
                    <div class="QuizLabelBlock">
                        <label class="QuizLabel">
                            <input class="QuizLabelInp" type="radio" name="activities" value="IT-технологии">
                            <span class="QuizLabelSpan"></span>
                            IT-технологии
                        </label>
                    </div>
                    <div class="QuizLabelBlock">
                        <label class="QuizLabel">
                            <input class="QuizLabelInp" type="radio" name="activities" value="Юридическии консультации">
                            <span class="QuizLabelSpan"></span>
                            Юридическии консультации
                        </label>
                    </div>
                    <div class="QuizLabelBlock">
                        <label class="QuizLabel">
                            <input class="QuizLabelInp" type="radio" name="activities" value="Другое">
                            <span class="QuizLabelSpan"></span>
                            Другое
                        </label>
                    </div>

                    <div>
                        <div class="QuizTitle">Опишите ваш бизнес</div>
                        <textarea name="aboutBusiness" id="aboutBusiness" cols="30" rows="8" placeholder="Введите текст" required></textarea>
                    </div>
                </form>

                <div class="quiz__footer">
                    <div class="progress-bar">
                        Шаг 2/4
                        <div class="progress-bar__container">
                            <div class="progress-bar__line" id="progress-bar"></div>
                        </div>
                    </div>
                    <button class="btn__pink btn-next">
                        Далее
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="11" cy="11" r="10.5" stroke="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.1875 10.3125C6.00516 10.3125 5.8303 10.3849 5.70136 10.5139C5.57243 10.6428 5.5 10.8177 5.5 11C5.5 11.1824 5.57243 11.3572 5.70136 11.4862C5.8303 11.6151 6.00516 11.6875 6.1875 11.6875H14.1529L11.2007 14.6383C11.1368 14.7022 11.0861 14.7781 11.0515 14.8616C11.0169 14.9451 10.9991 15.0346 10.9991 15.125C10.9991 15.2154 11.0169 15.3049 11.0515 15.3884C11.0861 15.472 11.1368 15.5478 11.2007 15.6118C11.2647 15.6757 11.3406 15.7264 11.4241 15.761C11.5076 15.7956 11.5971 15.8134 11.6875 15.8134C11.7779 15.8134 11.8674 15.7956 11.9509 15.761C12.0344 15.7264 12.1103 15.6757 12.1742 15.6118L16.2992 11.4868C16.3633 11.4229 16.4141 11.347 16.4487 11.2635C16.4834 11.18 16.5012 11.0904 16.5012 11C16.5012 10.9096 16.4834 10.82 16.4487 10.7365C16.4141 10.653 16.3633 10.5771 16.2992 10.5133L12.1742 6.38826C12.1103 6.32434 12.0344 6.27364 11.9509 6.23904C11.8674 6.20445 11.7779 6.18665 11.6875 6.18665C11.5971 6.18665 11.5076 6.20445 11.4241 6.23904C11.3406 6.27364 11.2647 6.32434 11.2007 6.38826C11.1368 6.45219 11.0861 6.52807 11.0515 6.61159C11.0169 6.6951 10.9991 6.78462 10.9991 6.87501C10.9991 6.96541 11.0169 7.05492 11.0515 7.13844C11.0861 7.22196 11.1368 7.29784 11.2007 7.36176L14.1529 10.3125H6.1875Z" fill="white"/>
                        </svg>
                    </button>
                </div>
            </div>

            <div id="step-3" class="hidden">
                <h2>Узнайте подходит ли ваш бизнес к закону ФЗ№ 46 от 8 марта 2022 года</h2>
                <form action="">
                    <div class="QuizTitle">Что вы хотите от проекта</div>
                    <div class="QuizLabelBlock">
                        <label class="QuizLabel">
                            <input class="QuizLabelInp" type="radio" name="project-goals"
                                   value="Решить текущие проблемы бизнеса">
                            <span class="QuizLabelSpan"></span>
                            Решить текущие проблемы бизнеса
                        </label>
                    </div>
                    <div class="QuizLabelBlock">
                        <label class="QuizLabel">
                            <input class="QuizLabelInp" type="radio" name="project-goals" value="Запустить бизнес с нуля">
                            <span class="QuizLabelSpan"></span>
                            Запустить бизнес с нуля
                        </label>
                    </div>
                    <div class="QuizLabelBlock">
                        <label class="QuizLabel">
                            <input class="QuizLabelInp" type="radio" name="project-goals"
                                   value="Узнать, что можно улучшить в моем бизнесе">
                            <span class="QuizLabelSpan"></span>
                            Узнать, что можно улучшить в моем бизнесе
                        </label>
                    </div>
                    <div class="QuizLabelBlock">
                        <label class="QuizLabel">
                            <input class="QuizLabelInp" type="radio" name="project-goals"
                                   value="Просто узнать о возможностях">
                            <span class="QuizLabelSpan"></span>
                            Просто узнать о возможностях
                        </label>
                    </div>
                </form>

                <div class="quiz__footer">
                    <div class="progress-bar">
                        Шаг 3/4
                        <div class="progress-bar__container">
                            <div class="progress-bar__line" id="progress-bar"></div>
                        </div>
                    </div>
                    <button class="btn__pink btn-next">
                        Далее
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="11" cy="11" r="10.5" stroke="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.1875 10.3125C6.00516 10.3125 5.8303 10.3849 5.70136 10.5139C5.57243 10.6428 5.5 10.8177 5.5 11C5.5 11.1824 5.57243 11.3572 5.70136 11.4862C5.8303 11.6151 6.00516 11.6875 6.1875 11.6875H14.1529L11.2007 14.6383C11.1368 14.7022 11.0861 14.7781 11.0515 14.8616C11.0169 14.9451 10.9991 15.0346 10.9991 15.125C10.9991 15.2154 11.0169 15.3049 11.0515 15.3884C11.0861 15.472 11.1368 15.5478 11.2007 15.6118C11.2647 15.6757 11.3406 15.7264 11.4241 15.761C11.5076 15.7956 11.5971 15.8134 11.6875 15.8134C11.7779 15.8134 11.8674 15.7956 11.9509 15.761C12.0344 15.7264 12.1103 15.6757 12.1742 15.6118L16.2992 11.4868C16.3633 11.4229 16.4141 11.347 16.4487 11.2635C16.4834 11.18 16.5012 11.0904 16.5012 11C16.5012 10.9096 16.4834 10.82 16.4487 10.7365C16.4141 10.653 16.3633 10.5771 16.2992 10.5133L12.1742 6.38826C12.1103 6.32434 12.0344 6.27364 11.9509 6.23904C11.8674 6.20445 11.7779 6.18665 11.6875 6.18665C11.5971 6.18665 11.5076 6.20445 11.4241 6.23904C11.3406 6.27364 11.2647 6.32434 11.2007 6.38826C11.1368 6.45219 11.0861 6.52807 11.0515 6.61159C11.0169 6.6951 10.9991 6.78462 10.9991 6.87501C10.9991 6.96541 11.0169 7.05492 11.0515 7.13844C11.0861 7.22196 11.1368 7.29784 11.2007 7.36176L14.1529 10.3125H6.1875Z" fill="white"/>
                        </svg>
                    </button>
                </div>
            </div>

            <div id="step-4" class="hidden">
                <h2>Узнайте подходит ли ваш бизнес к закону ФЗ№ 46 от 8 марта 2022 года</h2>
                <form action="">
                    <input type="tel" id="quizPhone" class="quiz-phone" name="quiz-phone" placeholder="Ваш телефон" required/>
                </form>
                <div class="zero__buttons btn-next">
                    <a class="btn__pink">Узнать подходит ли бизнес к закону ФЗ№46
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <circle cx="11" cy="11" r="10.5" stroke="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.1875 10.3125C6.00516 10.3125 5.8303 10.3849 5.70136 10.5139C5.57243 10.6428 5.5 10.8177 5.5 11C5.5 11.1824 5.57243 11.3572 5.70136 11.4862C5.8303 11.6151 6.00516 11.6875 6.1875 11.6875H14.1529L11.2007 14.6383C11.1368 14.7022 11.0861 14.7781 11.0515 14.8616C11.0169 14.9451 10.9991 15.0346 10.9991 15.125C10.9991 15.2154 11.0169 15.3049 11.0515 15.3884C11.0861 15.472 11.1368 15.5478 11.2007 15.6118C11.2647 15.6757 11.3406 15.7264 11.4241 15.761C11.5076 15.7956 11.5971 15.8134 11.6875 15.8134C11.7779 15.8134 11.8674 15.7956 11.9509 15.761C12.0344 15.7264 12.1103 15.6757 12.1742 15.6118L16.2992 11.4868C16.3633 11.4229 16.4141 11.347 16.4487 11.2635C16.4834 11.18 16.5012 11.0904 16.5012 11C16.5012 10.9096 16.4834 10.82 16.4487 10.7365C16.4141 10.653 16.3633 10.5771 16.2992 10.5133L12.1742 6.38826C12.1103 6.32434 12.0344 6.27364 11.9509 6.23904C11.8674 6.20445 11.7779 6.18665 11.6875 6.18665C11.5971 6.18665 11.5076 6.20445 11.4241 6.23904C11.3406 6.27364 11.2647 6.32434 11.2007 6.38826C11.1368 6.45219 11.0861 6.52807 11.0515 6.61159C11.0169 6.6951 10.9991 6.78462 10.9991 6.87501C10.9991 6.96541 11.0169 7.05492 11.0515 7.13844C11.0861 7.22196 11.1368 7.29784 11.2007 7.36176L14.1529 10.3125H6.1875Z" fill="white"/>
                        </svg>
                    </a>
                </div>
                <p class="quiz__info">
                    *отправляя формы на данном сайте, вы даете согласие
                    на обработку персональных данных в соответствии с 152-ФЗ
                </p>

                <div class="quiz__footer">
                    <div class="progress-bar">
                        Шаг 4/4
                        <div class="progress-bar__container">
                            <div class="progress-bar__line" id="progress-bar"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="step-5" class="hidden">
                <h2>Спасибо! Ждите предложение</h2>
                <form action="">
                    <div class="QuizTitle">
                        Укажите вашу почту, чтобы мы отправили на нее полезную информацию о нас, пока ждете звонка
                    </div>
                    <input type="email" id="quizEmail" class="quiz-email" name="quiz-email" placeholder="Ваша почта" required/>
                </form>
                <div class="zero__buttons btn-next">
                    <a class="btn__pink">Отправить материалы на почту
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="11" cy="11" r="10.5" stroke="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.1875 10.3125C6.00516 10.3125 5.8303 10.3849 5.70136 10.5139C5.57243 10.6428 5.5 10.8177 5.5 11C5.5 11.1824 5.57243 11.3572 5.70136 11.4862C5.8303 11.6151 6.00516 11.6875 6.1875 11.6875H14.1529L11.2007 14.6383C11.1368 14.7022 11.0861 14.7781 11.0515 14.8616C11.0169 14.9451 10.9991 15.0346 10.9991 15.125C10.9991 15.2154 11.0169 15.3049 11.0515 15.3884C11.0861 15.472 11.1368 15.5478 11.2007 15.6118C11.2647 15.6757 11.3406 15.7264 11.4241 15.761C11.5076 15.7956 11.5971 15.8134 11.6875 15.8134C11.7779 15.8134 11.8674 15.7956 11.9509 15.761C12.0344 15.7264 12.1103 15.6757 12.1742 15.6118L16.2992 11.4868C16.3633 11.4229 16.4141 11.347 16.4487 11.2635C16.4834 11.18 16.5012 11.0904 16.5012 11C16.5012 10.9096 16.4834 10.82 16.4487 10.7365C16.4141 10.653 16.3633 10.5771 16.2992 10.5133L12.1742 6.38826C12.1103 6.32434 12.0344 6.27364 11.9509 6.23904C11.8674 6.20445 11.7779 6.18665 11.6875 6.18665C11.5971 6.18665 11.5076 6.20445 11.4241 6.23904C11.3406 6.27364 11.2647 6.32434 11.2007 6.38826C11.1368 6.45219 11.0861 6.52807 11.0515 6.61159C11.0169 6.6951 10.9991 6.78462 10.9991 6.87501C10.9991 6.96541 11.0169 7.05492 11.0515 7.13844C11.0861 7.22196 11.1368 7.29784 11.2007 7.36176L14.1529 10.3125H6.1875Z" fill="white"/>
                        </svg>
                    </a>
                </div>
                <p class="quiz__info">
                    *отправляя формы на данном сайте, вы даете согласие
                    на обработку персональных данных в соответствии с 152-ФЗ
                </p>

                <div class="quiz__footer">
                    <div class="progress-bar">
                        Шаг 4/4
                        <div class="progress-bar__container">
                            <div class="progress-bar__line" id="progress-bar"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="step-6" class="hidden">
                <h2>Спасибо! Ждите предложение</h2>
                <div class="QuizTitle">Материалы будут отправлены на указанную почту</div>

                <div class="quiz__footer">
                    <div class="progress-bar">
                        Шаг 4/4
                        <div class="progress-bar__container">
                            <div class="progress-bar__line" id="progress-bar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <div class="quiz__line"></div>
<?php include'../includes/footer.php'?>