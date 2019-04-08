<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Blog</h1>
                    <nav class="d-flex align-items-center">
                        <a href="<?= site_url() ?>">Beranda<span class="lnr lnr-arrow-right"></span></a>
                        <a href="<?= site_url('blogs') ?>">Blog</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

    <!--================Blog Categorie Area =================-->
    <br/>
    <br/>
    <!--================Blog Categorie Area =================-->

    <!--================Blog Area =================-->
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                        <div id="div_blog"></div>
                        <nav class="blog-pagination justify-content-center d-flex">
                            <!-- <ul class="pagination"> -->
                                <!-- Paginate -->
   						    <div class="pagination" id='pagination'></div>
                            <!-- </ul> -->
                            
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form id="searchForm">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="q" placeholder="Search Posts" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit"><i class="lnr lnr-magnifier"></i></button>
                                    </span>
                                </div><!-- /input-group -->
                            </form>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Popular Posts</h3>
                            <div id="div_topBlog"></div>
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
            
            $.ajax({
					url: '<?= site_url() ?>blogs/getAdditionalData/',
					type: 'GET',
					dataType: 'json',
					success: function(response) {
						if (response.data.code != 200) {
							var blog = 'Blog tidak ditemukan.'
							$("#div_blog").append(blog).fadeIn(500);
						}
                        for(var j=0; j < response.data.blog.length; j++) {
                            var blog =
                            '<div class="media post_item">'+
                                '<img src="' + base_url + 'files/blog/' + response.data.blog[j]['cover'] + '" alt="post" width="100" height="60">'+
                                '<div class="media-body">'+
                                    '<a href="' + base_url + 'blogs/read/' + response.data.blog[j]['title'] + '">'+
                                        '<h3>' + response.data.blog[j]['title'].slice(0, 17)+'...' + '</h3>'+
                                    '</a>'+
                                    '<p>02 Hours ago</p>'+
                                '</div>'+
                            '</div>';
                            $("#div_topBlog").append(blog).fadeIn(500);
                        }
					}
				});

			$('#pagination').on('click', 'a', function(e) {
				e.preventDefault();
				var pageno = $(this).attr('data-ci-pagination-page');
				loadPagination(pageno);
			});
			loadPagination(0);

			function loadPagination(pagno) {
				$.ajax({
					url: '<?= site_url() ?>blogs/getUkmBlog/'+ pagno,
					data: {
                        pageno: pagno,
						q: $("#q").val()
					},
					type: 'GET',
					dataType: 'json',
					success: function(response) {
						if (response.data.code != 200) {
							var blog = 'Blog tidak ditemukan.'
							$("#div_blog").append(blog).fadeIn(500);
						}
						$('#pagination').html(response.data.blog.pagination);
						createList(response.data.blog.result);
					}
				});
			}

			function createList(result) {
				$('#div_blog').empty();
				for (k in result) {
					var blog =
                        '<article class="row blog_item">'+
                            '<div class="col-md-3">'+
                                '<div class="blog_info text-right">'+
                                    '<ul class="blog_meta list">'+
                                        '<li><a href="#">' + result[k].author + '<i class="lnr lnr-user"></i></a></li>'+
                                        '<li><a href="#">' + result[k].create_at + '<i class="lnr lnr-calendar-full"></i></a></li>'+
                                        '<li><a href="#">' + result[k].views + ' Views<i class="lnr lnr-eye"></i></a></li>'+
                                   '</ul>'+
                               '</div>'+
                           '</div>'+
                            '<div class="col-md-9">'+
                                '<div class="blog_post">'+
                                    '<img src="' + base_url + 'files/blog/' + result[k].cover + '" alt="" width="555" height="280">'+
                                    '<div class="blog_details">'+
                                        '<a href="single-blog.html">'+
                                            '<h2>' + result[k].title + '</h2>'+
                                       '</a>'+
                                        '<p>' + result[k].description + '</p>'+
                                        '<a href="single-blog.html" class="white_bg_btn">View More</a>'+
                                   '</div>'+
                               '</div>'+
                           '</div>'+
                       '</article>';
					$("#div_blog").append(blog).fadeIn(500);
				}
			}

			$("#searchForm").submit(function(event) {
				$.ajax({
					url: '<?= site_url() ?>blogs/getUkmBlog/0',
					data: {
						pageno: 0,
						q: $("#q").val()
					},
					type: 'GET',
					dataType: 'json',
					success: function(response) {
						if (response.code != 200) {
							var blog = 'Blog tidak ditemukan.'
                            $("#div_blog").append(blog).fadeIn(500);
                            alert(response.message);
						}
						$('#pagination').html(response.data.blog.pagination);
						createList(response.data.blog.result);
					}
				});
				event.preventDefault();
			});
		});
	</script>