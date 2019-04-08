<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Halaman UKM</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="category.html">Blog</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">
                        <div class="col-lg-12">
                            <div class="feature-img">
                            </div>
                        </div>
                        <div class="col-lg-3  col-md-3">
                            <div class="blog_info text-right">
                                <div class="post_tag">
                                    <a href="#" id="a_category_producs"></a>
                                </div>
                                <ul class="blog_meta list">
                                    <li id="li_joinAt"><a href="#"><i class="lnr lnr-calendar-full"></i></a></li>
                                    <li id="li_views"><a href="#"><i class="lnr lnr-eye"></i></a></li>
                                    <li><a href="#">06 Comments<i class="lnr lnr-bubble"></i></a></li>
                                </ul>
                                <ul class="social-links">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 blog_details">
                            <h2 id="h2_ukmName"></h2>
                            <p id="p_description"></p>
                        </div>
                        <div class="col-lg-12">
                            <div class="quotes"></div>
                        </div>
                    </div>
                    <!-- <div class="navigation-area">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                <div class="thumb">
                                    <a href="#"><img class="img-fluid" src="<?= base_url() ?>assets/img/blog/prev.jpg" alt=""></a>
                                </div>
                                <div class="arrow">
                                    <a href="#"><span class="lnr text-white lnr-arrow-left"></span></a>
                                </div>
                                <div class="detials">
                                    <p>Prev Post</p>
                                    <a href="#">
                                        <h4>Space The Final Frontier</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                <div class="detials">
                                    <p>Next Post</p>
                                    <a href="#">
                                        <h4>Telescopes 101</h4>
                                    </a>
                                </div>
                                <div class="arrow">
                                    <a href="#"><span class="lnr text-white lnr-arrow-right"></span></a>
                                </div>
                                <div class="thumb">
                                    <a href="#"><img class="img-fluid" src="<?= base_url() ?>assets/img/blog/next.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="comments-area">
                        
                    </div>
                    <div class="comment-form">
                        <h4>Berikan Komentar</h4>
                        <form id="commentForm">
                            <div class="form-group form-inline">
                                <div class="form-group col-lg-6 col-md-6 name">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Masukkan nama'">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 email">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan email'">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Masukkan judul" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Masukkan judul'">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control mb-10" rows="5" name="message" placeholder="Masukkan pesan"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Pesan'" required=""></textarea>
                            </div>
                            <input type="hidden" class="form-control" id="ukmName" name="ukmName" value="<?= $this->input->get('ukmName') ?>">
                            <button type="submit" class="primary-btn submit_btn">Kirim</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget author_widget">
                            <div id="logo"></div>
                            <h4 id="h4_founder"></h4>
                            <p>Pengelola UKM</p>
                            <div class="social_icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-github"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                            <p id="p_quote"></p>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Post Populer</h3>
                            <div class="product-area">
                            </div>
                            <div class="br"></div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
    <script>
    $(document).ready(function() {
        var base_url = '<?= base_url() ?>';
        getAllFata();
        function getAllFata(){
            $.ajax({
                url:  '<?= site_url() ?>ukms/getUkmDataDetailProfile',
                type: 'GET',
                data: {
                    ukmName: '<?= $this->input->get('ukmName') ?>'
                },
                async: true,
                cache: false,
                dataType: 'json',
                beforeSend: function() {
                    $("#p_quote").empty();
                    $("#h4_founder").empty();
                    $("#h2_ukmName").empty();
                    $("#li_joinAt").empty();
                    $("#a_category_producs").empty();
                    $("#p_description").empty();
                    $("#quotes").empty();
                    $("#li_views").empty();
                    $(".feature-img").empty();
                    $("#logo").empty();
                    $(".comments-area").empty();
                    $(".product-area").empty();
                },
                complete: function() {
                },
                success: function(response) {
                    $("#p_quote").text(response.data.profile[0]['quotes']);
                    $("#h4_founder").text(response.data.profile[0]['founder']);
                    $("#h2_ukmName").text(response.data.profile[0]['name']);
                    $("#li_joinAt").text(response.data.profile[0]['join_app_at']);
                    $("#a_category_producs").text(response.data.profile[0]['category_products_id']);
                    $("#p_description").text(response.data.profile[0]['description']);
                    $("#quotes").text(response.data.profile[0]['quotes']);
                    $("#li_views").text(response.data.profile[0]['views'] + " Views");
                    
                    var cover = '<img src="'+ base_url + 'files/profile/' +response.data.profile[0]['logo_cover'] +'" alt="post" width="750" height="350">';
                    $(".feature-img").append(cover).fadeIn(500);

                    var cover = '<img src="'+ base_url + 'files/profile/' +response.data.profile[0]['logo'] +'" class="author_img rounded-circle" alt="post" width="120" height="120">';
                    $("#logo").append(cover).fadeIn(500);
                    
                    for(var j=0; j < response.data.comment.length; j++) {
                        var comment =
                            '<div class="comment-list">' +
                                '<div class="single-comment justify-content-between d-flex">' +
                                    '<div class="user justify-content-between d-flex">' +
                                        '<div class="desc">' +
                                            '<h5><a href="#">'+ response.data.comment[j]['name'] +'</a></h5>' +
                                            '<p class="date">'+ response.data.comment[j]['create_at'] +'</p>' +
                                            '<p class="comment">' +
                                                response.data.comment[j]['message'] +
                                            '</p>' +
                                        '</div>' +
                                    '</div>' +
                                '</div>' +
                            '</div>';
                        $(".comments-area").append(comment).fadeIn(500);
                    }

                    for(var k=0; k < response.data.product.length; k++) {
                        var product =
                            '<div class="media post_item">'+
                                '<img src="'+ base_url + 'files/product/' +response.data.product[k]['image'] +'" alt="post" width="100" height="60">'+
                                '<div class="media-body">'+
                                    '<a href="blog-details.html">'+
                                        '<h3>'+ response.data.product[k]['name'] +'</h3>'+
                                    '</a>'+
                                    '<p>Harga : '+ response.data.product[k]['price'] +'</p>'+
                                    '<p>Terjual : '+ response.data.product[k]['sold_count'] +'</p>'+
                                '</div>'+
                            '</div>';
                        $(".product-area").append(product).fadeIn(500);
                    }
                }
            });
        }

        $("#commentForm").submit(function(event) {
				$.ajax({
					url: '<?= site_url() ?>ukms/processAddComent/',
					data: $(this).serialize(),
					type: 'POST',
                    dataType: 'json',
                    async: true,
                    cache: false,
                    dataType: 'json',
                    beforeSend: function() {
                    },
                    complete: function() {
                    },
					success: function(response) {
                        getAllFata();
					}
				});
				event.preventDefault();
			});
    });
    </script>