<?php
/**
 * Product Loop Start
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-start.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */
?>
<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet">

        <ul class="accordion-tabs">
            <li class="tab-header-and-content skipass">
                <a href="javascript:void(0)" class="is-active tab-link">Абонементи</a>
                <div class="tab-content">
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--4-col">
                            <table class="mdl-data-table mdl-js-data-table">
                                <thead>
                                    <tr>
                                        <td colspan="3" ">
                                            <h5>Низький сезон</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            Активний: до 01.01 і з 10.03
                                            <br>
                                            Неактивний: 02.01-9.03
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>

                                    <td class="mdl-data-table__cell--non-numeric">3 дні</td>
                                    <td class="mdl-data-table__cell--non-numeric">1125 грн</td>
                                    <td><img src="/wp-content/themes/MDLWP-master/images/basket.png" alt="купити"></td>

                                </tr>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">5 днів</td>
                                    <td class="mdl-data-table__cell--non-numeric">1775 грн</td>
                                    <td><img src="/wp-content/themes/MDLWP-master/images/basket.png" alt="купити"></td>

                                </tr>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">10 днів</td>
                                    <td class="mdl-data-table__cell--non-numeric">3160 грн</td>
                                    <td><img src="/wp-content/themes/MDLWP-master/images/basket.png" alt="купити"></td>
                                </tr>
                                </tbody>
                                <tfoot>
                                    <td colspan="3"><img title="snow" src="/wp-content/themes/MDLWP-master/images/snow.png" alt="snow">В абонементи включено вечірнє катання</td>
                                </tfoot>
                            </table>
                        </div>
                        <div class="mdl-cell mdl-cell--4-col">
                            <table class="mdl-data-table mdl-js-data-table">
                                <thead>
                                    <tr>
                                        <td colspan="3" ">
                                            <h5>Високий сезон</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            Активний: в будь-який день сезону
                                            <br>
                                            Неактивний: 2-6.01
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">3 дні</td>
                                        <td class="mdl-data-table__cell--non-numeric">1925 грн</td>
                                        <td><img src="/wp-content/themes/MDLWP-master/images/basket.png" alt="купити"></td>

                                    </tr>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">5+3 дні</td>
                                        <td class="mdl-data-table__cell--non-numeric">4675 грн</td>
                                        <td><img src="/wp-content/themes/MDLWP-master/images/basket.png" alt="купити"></td>

                                    </tr>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">10+4 днів</td>
                                        <td class="mdl-data-table__cell--non-numeric">8310 грн</td>
                                        <td>
                                            <img src="/wp-content/themes/MDLWP-master/images/basket.png" alt="купити">
                                        </td>

                                    </tr>
                                </tbody>
                                <tfoot>
                                    <td colspan="3"><img title="snow" src="/wp-content/themes/MDLWP-master/images/snow.png" alt="snow">Абонемент дійсний до повного використання</td>
                                </tfoot>
                            </table>

                        </div>
                        <div class="mdl-cell mdl-cell--4-col">
                            <table class="mdl-data-table mdl-js-data-table">
                                <thead>
                                    <tr>
                                        <td colspan="3" ">
                                        <h5>В сезоні 2016-2017</h5>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            Активний: будь-який день сезону
                                            <br>
                                            Неактивний: 2-6.01
                                        </td>
                                    </tr>
                                </thead>
                                <tbody style="white-space: nowrap">
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">3 дні</td>
                                        <td colspan="2" class="mdl-data-table__cell--non-numeric">2960 грн</td>
                                    </tr>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">5 днів</td>
                                        <td colspan="2" class="mdl-data-table__cell--non-numeric">4675 грн</td>
                                    </tr>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric">10 днів</td>
                                        <td colspan="2" class="mdl-data-table__cell--non-numeric">8310 грн</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <td colspan="3"><img title="snow" src="/wp-content/themes/MDLWP-master/images/snow.png" alt="snow">Всі абонементи можуть бути використані в декількох поїздках</td>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </li>
            <li class="tab-header-and-content club-cards">
                <a href="javascript:void(0)" class="tab-link">Клубні карти</a>
                <div class="tab-content">
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--4-col">
                            <table class="mdl-data-table mdl-js-data-table">
                                <thead>
                                <tr>
                                    <td colspan="3" ">
                                    <h5>Низький сезон</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        Активний: до 01.01 і з 10.03
                                        <br>
                                        Неактивний: 02.01-9.03
                                    </td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">3 дні</td>
                                    <td class="mdl-data-table__cell--non-numeric">1125 грн</td>
                                    <td><img src="/wp-content/themes/MDLWP-master/images/basket.png" alt="купити"></td>

                                </tr>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">5 днів</td>
                                    <td class="mdl-data-table__cell--non-numeric">1775 грн</td>
                                    <td><img src="/wp-content/themes/MDLWP-master/images/basket.png" alt="купити"></td>

                                </tr>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">10 днів</td>
                                    <td class="mdl-data-table__cell--non-numeric">3160 грн</td>
                                    <td><img src="/wp-content/themes/MDLWP-master/images/basket.png" alt="купити"></td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <td colspan="3"><img title="snow" src="/wp-content/themes/MDLWP-master/images/snow.png" alt="snow">В абонементи включено вечірнє катання</td>
                                </tfoot>
                            </table>
                        </div>
                        <div class="mdl-cell mdl-cell--4-col">
                            <table class="mdl-data-table mdl-js-data-table">
                                <thead>
                                <tr>
                                    <td colspan="3" ">
                                    <h5>Високий сезон</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        Активний: в будь-який день сезону
                                        <br>
                                        Неактивний: 2-6.01
                                    </td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">3 дні</td>
                                    <td class="mdl-data-table__cell--non-numeric">1925 грн</td>
                                    <td><img src="/wp-content/themes/MDLWP-master/images/basket.png" alt="купити"></td>

                                </tr>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">5+3 дні</td>
                                    <td class="mdl-data-table__cell--non-numeric">4675 грн</td>
                                    <td><img src="/wp-content/themes/MDLWP-master/images/basket.png" alt="купити"></td>

                                </tr>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">10+4 днів</td>
                                    <td class="mdl-data-table__cell--non-numeric">8310 грн</td>
                                    <td>
                                        <img src="/wp-content/themes/MDLWP-master/images/basket.png" alt="купити">
                                    </td>

                                </tr>
                                </tbody>
                                <tfoot>
                                <td colspan="3"><img title="snow" src="/wp-content/themes/MDLWP-master/images/snow.png" alt="snow">Абонемент дійсний до повного використання</td>
                                </tfoot>
                            </table>

                        </div>
                        <div class="mdl-cell mdl-cell--4-col">
                            <table class="mdl-data-table mdl-js-data-table" style="white-space: normal">
                                <thead>
                                <tr>
                                    <td colspan="3" ">
                                    <h5>В сезоні 2016-2017</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        Активний: будь-який день сезону
                                        <br>
                                        Неактивний: 2-6.01
                                    </td>
                                </tr>
                                </thead>
                                <tbody style="white-space: nowrap">
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">3 дні</td>
                                    <td colspan="2" class="mdl-data-table__cell--non-numeric">2960 грн</td>
                                </tr>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">5 днів</td>
                                    <td colspan="2" class="mdl-data-table__cell--non-numeric">4675 грн</td>
                                </tr>
                                <tr>
                                    <td class="mdl-data-table__cell--non-numeric">10 днів</td>
                                    <td colspan="2" class="mdl-data-table__cell--non-numeric">8310 грн</td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <td colspan="3"><img title="snow" src="/wp-content/themes/MDLWP-master/images/snow.png" alt="snow">Всі абонементи можуть бути використані в декількох поїздках</td>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </li>
            <li class="tab-header-and-content skirent">
                <a href="javascript:void(0)" class="tab-link">Прокат снаряги</a>
                <div class="tab-content">
                    <div class="mdl-grid skirent-purchase-options">
                        <div class="mdl-cell mdl-cell--4-col">
                            <table class="mdl-data-table mdl-js-data-table">
                                <thead>
                                    <tr>
                                        <td colspan="3" ">
                                            <h5>Лижі</h5>
                                            <p>(лижі, палиці, черевики, захисний шолом)</p>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="3" class="mdl-data-table__cell--non-numeric">Категорія А</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="mdl-data-table__cell--non-numeric">Категорія B</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="mdl-data-table__cell--non-numeric">Категорія C</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="mdl-data-table__cell--non-numeric">Категорія D1</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="mdl-data-table__cell--non-numeric">Категорія D2</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mdl-cell mdl-cell--4-col">
                            <table class="mdl-data-table mdl-js-data-table">
                                <thead>
                                    <tr>
                                        <td colspan="3" ">
                                            <h5>Абонементи на прокат</h5>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="2" class="mdl-data-table__cell--non-numeric">240 грн</td>
                                        <td><img src="/wp-content/themes/MDLWP-master/images/basket.png" alt="купити"></td>

                                    </tr>
                                    <tr>
                                        <td colspan="2" class="mdl-data-table__cell--non-numeric">135 грн</td>
                                        <td><img src="/wp-content/themes/MDLWP-master/images/basket.png" alt="купити"></td>

                                    </tr>
                                    <tr>
                                        <td colspan="2" class="mdl-data-table__cell--non-numeric">90 грн</td>
                                        <td>
                                            <img src="/wp-content/themes/MDLWP-master/images/basket.png" alt="купити">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="mdl-data-table__cell--non-numeric">95 грн</td>
                                        <td>
                                            <img src="/wp-content/themes/MDLWP-master/images/basket.png" alt="купити">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="mdl-data-table__cell--non-numeric">65 грн</td>
                                        <td>
                                            <img src="/wp-content/themes/MDLWP-master/images/basket.png" alt="купити">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <div class="mdl-cell mdl-cell--4-col">
                            <table class="mdl-data-table mdl-js-data-table">
                                <thead>
                                    <tr>
                                        <td colspan="3" ">
                                            <h5>Ваучери для поповнення клубних карт</h5>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="2" class="mdl-data-table__cell--non-numeric">160 грн</td>
                                        <td><img src="/wp-content/themes/MDLWP-master/images/basket.png" alt="купити"></td>

                                    </tr>
                                    <tr>
                                        <td colspan="2" class="mdl-data-table__cell--non-numeric">90 грн</td>
                                        <td><img src="/wp-content/themes/MDLWP-master/images/basket.png" alt="купити"></td>

                                    </tr>
                                    <tr>
                                        <td colspan="2" class="mdl-data-table__cell--non-numeric">60 грн</td>
                                        <td>
                                            <img src="/wp-content/themes/MDLWP-master/images/basket.png" alt="купити">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="mdl-data-table__cell--non-numeric">65 грн</td>
                                        <td>
                                            <img src="/wp-content/themes/MDLWP-master/images/basket.png" alt="купити">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="mdl-data-table__cell--non-numeric">45 грн</td>
                                        <td>
                                            <img src="/wp-content/themes/MDLWP-master/images/basket.png" alt="купити">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mdl-cell mdl-cell--4-col">
                            <table class="mdl-data-table mdl-js-data-table">
                                <thead>
                                    <tr>
                                        <td colspan="3" ">
                                            <h5>Сноуборд</h5>
                                            <p>(дошка, черевики, захисний шолом)</p>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="3" class="mdl-data-table__cell--non-numeric">Категорія А</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="mdl-data-table__cell--non-numeric">Категорія B</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="mdl-data-table__cell--non-numeric">Категорія C</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="mdl-data-table__cell--non-numeric">Категорія D</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mdl-cell mdl-cell--4-col">
                            <table class="mdl-data-table mdl-js-data-table">
                                <thead>
                                    <tr>
                                        <td colspan="3" ">
                                            <h5>Абонементи на прокат</h5>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="2" class="mdl-data-table__cell--non-numeric">135 грн</td>
                                        <td><img src="/wp-content/themes/MDLWP-master/images/basket.png" alt="купити"></td>

                                    </tr>
                                    <tr>
                                        <td colspan="2" class="mdl-data-table__cell--non-numeric">110 грн</td>
                                        <td><img src="/wp-content/themes/MDLWP-master/images/basket.png" alt="купити"></td>

                                    </tr>
                                    <tr>
                                        <td colspan="2" class="mdl-data-table__cell--non-numeric">90 грн</td>
                                        <td>
                                            <img src="/wp-content/themes/MDLWP-master/images/basket.png" alt="купити">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="mdl-data-table__cell--non-numeric">75 грн</td>
                                        <td>
                                            <img src="/wp-content/themes/MDLWP-master/images/basket.png" alt="купити">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <div class="mdl-cell mdl-cell--4-col">
                            <table class="mdl-data-table mdl-js-data-table">
                                <thead>
                                    <tr>
                                        <td colspan="3" ">
                                            <h5>Ваучери для поповнення <br> клубних карт</h5>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="2" class="mdl-data-table__cell--non-numeric">90 грн</td>
                                        <td><img src="/wp-content/themes/MDLWP-master/images/basket.png" alt="купити"></td>

                                    </tr>
                                    <tr>
                                        <td colspan="2" class="mdl-data-table__cell--non-numeric">70 грн</td>
                                        <td><img src="/wp-content/themes/MDLWP-master/images/basket.png" alt="купити"></td>

                                    </tr>
                                    <tr>
                                        <td colspan="2" class="mdl-data-table__cell--non-numeric">60 грн</td>
                                        <td>
                                            <img src="/wp-content/themes/MDLWP-master/images/basket.png" alt="купити">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="mdl-data-table__cell--non-numeric">50 грн</td>
                                        <td>
                                            <img src="/wp-content/themes/MDLWP-master/images/basket.png" alt="купити">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mdl-cell mdl-cell--4-col">
                            <table class="mdl-data-table mdl-js-data-table">
                                <thead>
                                <tr>
                                    <td colspan="3" ">
                                        <h5>Інше спорядження</h5>
                                    </td>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="3" class="mdl-data-table__cell--non-numeric">Сноублейд <p> (комплект з черевиками та шоломом) </p></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="mdl-data-table__cell--non-numeric">Шолом захисний <p>(обов'язково)</p> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mdl-cell mdl-cell--4-col">
                            <table class="mdl-data-table mdl-js-data-table">
                                <thead>
                                <tr>
                                    <td colspan="3" ">
                                        <h5>Абонементи на прокат</h5>
                                    </td>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="2" class="mdl-data-table__cell--non-numeric">135 грн</td>
                                        <td><img src="/wp-content/themes/MDLWP-master/images/basket.png" alt="купити"></td>

                                    </tr>
                                    <tr>
                                        <td colspan="2" class="mdl-data-table__cell--non-numeric">30 грн</td>
                                        <td><img src="/wp-content/themes/MDLWP-master/images/basket.png" alt="купити"></td>

                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <div class="mdl-cell mdl-cell--4-col">
                            <table class="mdl-data-table mdl-js-data-table">
                                <thead>
                                <tr>
                                    <td colspan="3" ">
                                        <h5>Ваучери для поповнення клубних карт</h5>
                                    </td>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="2" class="mdl-data-table__cell--non-numeric">90 грн</td>
                                        <td><img src="/wp-content/themes/MDLWP-master/images/basket.png" alt="купити"></td>

                                    </tr>
                                    <tr>
                                        <td colspan="2" class="mdl-data-table__cell--non-numeric">20 грн</td>
                                        <td><img src="/wp-content/themes/MDLWP-master/images/basket.png" alt="купити"></td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col">
                            <table class="mdl-data-table mdl-js-data-table">
                                <td colspan="3">
                                    <img title="snow" src="/wp-content/themes/MDLWP-master/images/snow.png" alt="snow">
                                    Абонементи на прокат спорядження активні в будь-який день сезону, крім 2-6.01
                                </td>
                            </table>
                        </div>


                    </div>
                </div>
            </li>
            <li class="tab-header-and-content skipass-ballance">
                <a href="javascript:void(0)" class="tab-link">Баланс абонемента</a>
                <div class="tab-content">
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--12-col">
                            <table class="mdl-data-table mdl-js-data-table">
                                <thead>
                                    <tr>
                                        <td colspan="4" ">
                                            <h4>Введіть номер картки з дефісами:</h4>
                                        <div class="mdl-spinner mdl-js-spinner is-active"></div>
                                            <form>
                                                <div class="mdl-textfield mdl-js-textfield">
                                                    <input class="mdl-textfield__input" type="numer" id="skipass-ballance" name="card_number">
                                                    <label class="mdl-textfield__label" for="skipass-ballance">01-2167-21-154156</label>
                                                </div>
                                                <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent button-skipass-ballance">
                                                    Отримати
                                                </button>

                                            </form>

                                        </td>
                                    </tr>
                                </thead>
                                <tbody class="skipass-ballance-result">
                                    <tr>
                                        <td colspan="4"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <ul class="products">
