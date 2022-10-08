
<!DOCTYPE html>
<html class="no-js" lang="en" data-theme="light">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="MobileOptimized" content="320" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>APP Production</title>
    <meta name="description" content="Arion — This is the best dashboard" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="application-name" content="Arion — This is the best dashboard" />
    <meta name="apple-mobile-web-app-title" content="Arion Admin Dashboard" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <link rel="stylesheet" href="cssa/bootstrap.min.css" />
    <link rel="stylesheet" href="cssa/apexcharts.css" />
    <link rel="stylesheet" href="cssa/tippy/tippy.css" />
    <link rel="stylesheet" href="cssa/flatpickr.min.css" />
    <link rel="stylesheet" href="cssa/select2.min.css" />
    <link rel="stylesheet" href="cssa/quill/quill.snow.css" />
    <link rel="stylesheet" href="cssa/quill/quill.core.css" />
    <link rel="stylesheet" href="cssa/filepond.min.css" />
    <link rel="stylesheet" href="cssa/filepond-plugin-image-preview.min.css" />
    <link rel="stylesheet" href="cssa/swiper-bundle.min.css" />
    <link rel="stylesheet" href="cssa/style.css" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/content/favicons/apple-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="img/content/favicons/apple-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/content/favicons/apple-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/content/favicons/apple-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/content/favicons/apple-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="img/content/favicons/apple-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="img/content/favicons/apple-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="img/content/favicons/apple-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="img/content/favicons/apple-icon-180x180.png" />
    <link rel="icon" type="image/png" sizes="192x192"  href="gambar/icon.png"/>
    <link rel="icon" type="image/png" sizes="32x32" href="gambar/icon.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="gambar/icon.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="gambar/icon.png"/>
    <!-- <link rel="manifest" href="img/content/favicons/manifest.json" />-->
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png" />
    <meta name="theme-color" content="#ffffff" />
</head>

<body class="sidebar-collapse">
    
    <div class="sidebar-backdrop"></div>
    <div class="page-wrapper">

        <!-- ////////////////////////////////////// -->
        <main class="page-content page-content--full">
        <div style="position:relative;margin-top:30px;">
        <center><h5 style="font-size:20px;">DATA ABSENSI GROUP B</h5></center>
        <div style="position:relative;left:1500px;top:-30px;"><a href="../absen/index_b.php"><img style="border-radius:20px;" src="image/orb.gif" width="50px" height="50px;"></a>	</div>
            <div class="col-auto">
                <a href="b_logistik.php"><button class="button button--primary button--load is-active"  type="submit" style="width:200px;height:40px;"><span class="button__icon button__icon--left">
                    <svg class="icon-icon-refresh">
                    <use xlink:href="#icon-refresh"></use>
                    </svg></span><span class="button__text">LOGISTIK</span>
                </button></a>
                <a href="b_ckd_non_maxi.php"><button class="button button--primary button--load is-active"  type="submit" style="width:200px;height:40px;"><span class="button__icon button__icon--left">
                    <svg class="icon-icon-refresh">
                    <use xlink:href="#icon-refresh"></use>
                    </svg></span><span class="button__text">CKD_NON_MAXI</span>
                </button></a>
                <a href="b_ckd.php"><button class="button button--primary button--load is-active"  type="submit" style="width:200px;height:40px;"><span class="button__icon button__icon--left">
                    <svg class="icon-icon-refresh">
                    <use xlink:href="#icon-refresh"></use>
                    </svg></span><span class="button__text">CKD</span>
                </button></a>
                <a href="b_pod.php"><button class="button button--primary button--load is-active"  type="submit" style="width:200px;height:40px;"><span class="button__icon button__icon--left">
                    <svg class="icon-icon-refresh">
                    <use xlink:href="#icon-refresh"></use>
                    </svg></span><span class="button__text">POD</span>
                </button></a>
                <a href="b_big_eg_export.php"><button class="button button--primary button--load is-active"  type="submit" style="width:200px;height:40px;"><span class="button__icon button__icon--left">
                    <svg class="icon-icon-refresh">
                    <use xlink:href="#icon-refresh"></use>
                    </svg></span><span class="button__text">BIG_EG_EXPORT</span>
                </button></a>
                <a href="b_id_adm.php"><button class="button button--primary button--load is-active"  type="submit" style="width:200px;height:40px;"><span class="button__icon button__icon--left">
                    <svg class="icon-icon-refresh">
                    <use xlink:href="#icon-refresh"></use>
                    </svg></span><span class="button__text">ID_ADM</span>
                </button></a>
                <a href="b_cbu.php"><button class="button button--primary button--load is-active"  type="submit" style="width:200px;height:40px;"><span class="button__icon button__icon--left">
                    <svg class="icon-icon-refresh">
                    <use xlink:href="#icon-refresh"></use>
                    </svg></span><span class="button__text">CBU</span>
                </button></a>
                <a href="b_ckd_line_g.php"><button class="button button--primary button--load is-active"  type="submit" style="width:200px;height:40px;"><span class="button__icon button__icon--left">
                    <svg class="icon-icon-refresh">
                    <use xlink:href="#icon-refresh"></use>
                    </svg></span><span class="button__text">CKD_LINE_G</span>
                </button></a>
                <a href="b_ckd_line_l.php"><button class="button button--primary button--load is-active"  type="submit" style="width:200px;height:40px;"><span class="button__icon button__icon--left">
                    <svg class="icon-icon-refresh">
                    <use xlink:href="#icon-refresh"></use>
                    </svg></span><span class="button__text">CKD_LINE_L</span>
                </button></a>
            </div>  
        </div>

        <!-- //////////////////////////////// -->


        </main>
    </div>
    <div class="inbox-add modal modal-compact scrollbar-thin" id="addTask" data-simplebar>
        <div class="modal__overlay" data-dismiss="modal"></div>
        <div class="modal__wrap">
            <div class="modal__window">
                <div class="modal__content">
                    <button class="modal__close" data-dismiss="modal">
                        <svg class="icon-icon-cross">
                            <use xlink:href="#icon-cross"></use>
                        </svg>
                    </button>
                    <div class="modal__header">
                        <div class="modal__container">
                            <h2 class="modal__title">Add Task</h2>
                        </div>
                    </div>
                    <div class="modal__body">
                        <div class="modal__container">
                            <form method="POST">
                                <div class="row">
                                    <div class="col-12 form-group form-group--lg">
                                        <label class="form-label form-label--sm">Title</label>
                                        <div class="input-group">
                                            <input class="input" type="text" value="Sed ut perspiciatis consectetur adipiscing." required>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group form-group--lg">
                                        <label class="form-label form-label--sm">Tags</label>
                                        <div class="tags">
                                            <ul class="tags__container">
                                                <li class="tags__item">
                                                    <div class="tag tag--default tag--append"><span class="tag__marker color-red"></span><span class="tag__text">Project</span>
                                                        <button class="tag__append" type="button">
                                                            <svg class="icon-icon-cross">
                                                                <use xlink:href="#icon-cross"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li class="tags__item">
                                                    <div class="tag tag--default tag--append"><span class="tag__marker color-green"></span><span class="tag__text">Issue</span>
                                                        <button class="tag__append" type="button">
                                                            <svg class="icon-icon-cross">
                                                                <use xlink:href="#icon-cross"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </li>
                                                <li class="tags__item">
                                                    <div class="tag tag--default tag--append"><span class="tag__marker color-orange-dark"></span><span class="tag__text">Work</span>
                                                        <button class="tag__append" type="button">
                                                            <svg class="icon-icon-cross">
                                                                <use xlink:href="#icon-cross"></use>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group form-group--lg">
                                        <label class="form-label form-label--sm">Notes</label>
                                        <div class="input-group">
                                            <textarea class="input" rows="6">non provident, similique sunt in culpa, qui officia deserunt mollitia animi, id est laborum et.</textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="modal__footer">
                        <div class="modal__container">
                            <div class="row">
                                <div class="col-auto ml-auto">
                                    <button class="button button--primary" data-dismiss="modal"><span class="button__icon button__icon--left">
                        <svg class="icon-icon-plus">
                          <use xlink:href="#icon-plus"></use>
                        </svg></span><span class="button__text">Add Task</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/gsap/gsap.min.js"></script>
    <script src="js/gsap/ScrollToPlugin.min.js"></script>
    <script src="js/gsap/ScrollTrigger.min.js"></script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="js/vendor/simplebar.min.js"></script>
    <script src="js/vendor/tippy-bundle.umd.min.js"></script>
    <script src="js/vendor/grid/masonry.pkgd.min.js"></script>
    <script src="js/vendor/grid/isotope.pkgd.min.js"></script>
    <script src="js/vendor/charts/circle-progress.min.js"></script>
    <script src="js/vendor/charts/echarts.common.min.js"></script>
    <script src="js/vendor/charts/apexcharts/apexcharts.min.js"></script>
    <script src="js/vendor/cleave/cleave.min.js"></script>
    <script src="js/vendor/cleave/addons/cleave-phone.us.js"></script>
    <script src="js/vendor/jqvmap/jquery.vmap.min.js"></script>
    <script src="js/vendor/jqvmap/jquery.vmap.world.js"></script>
    <script src="js/vendor/jqvmap/jquery.vmap.sampledata.js"></script>
    <script src="js/vendor/jquery.star-rating-svg.min.js"></script>
    <script src="js/vendor/calendar/flatpickr/flatpickr.min.js"></script>
    <script src="js/vendor/calendar/flatpickr/en.js"></script>
    <script src="js/vendor/select2.min.js"></script>
    <script src="js/vendor/editors/quill.min.js"></script>
    <script src="js/vendor/filepond/filepond-plugin-image-preview.min.js"></script>
    <script src="js/vendor/filepond/filepond.min.js"></script>
    <script src="js/vendor/swiper-bundle.min.js"></script>
    <script src="js/vendor/scrollmagic/ScrollMagic.min.js"></script>
    <script src="js/vendor/scrollmagic/debug.addIndicators.min.js"></script>
    <script src="js/components.js"></script>
    <script src="js/common.js"></script>
</body>

</html>