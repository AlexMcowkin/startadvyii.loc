<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
?>
<?php $this->beginContent('@app/views/layouts/common.php');?>
<?= Breadcrumbs::widget([
    'tag' => 'ol',
    'options' => ['class' => 'breadcrumb breadcrumb-quirk'],
    'homeLink' => [
        'label' => '<i class="fa fa-home mr5"></i>',
        'url' => Url::toRoute('/backend/index'),
        'encode' => false,
        'template' => "<li>{link}</li>",
    ],
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]);?>
<hr class="darken" />
<div class="pageheader mb20">
	<h2><i class="fa fa-tags mr10"></i><?= Html::encode($this->title);?></h2>
</div>
<div class="row">
	<div class="col-md-9 col-lg-8 dash-left">
		<?=$content;?>

        <div class="well well-asset-options clearfix">
            <div class="btn-toolbar btn-toolbar-media-manager pull-left" role="toolbar">
              <div class="btn-group" role="group">
                <button type="button" class="btn btn-default"><i class="fa fa-share"></i> Share</button>
                <button type="button" class="btn btn-default"><i class="fa fa-download"></i> Download</button>
              </div>
              <div class="btn-group" role="group">
                <button type="button" class="btn btn-default disabled"><i class="fa fa-pencil"></i> Edit</button>
                <button type="button" class="btn btn-default disabled"><i class="fa fa-trash"></i> Delete</button>
              </div>
            </div><!-- btn-toolbar -->

            <div class="btn-group pull-right" data-toggle="buttons">
              <label class="btn btn-default-active active">
                <input checked="" type="checkbox"> All
              </label>
              <label class="btn btn-default-active">
                <input type="checkbox"> Images
              </label>
              <label class="btn btn-default-active">
                <input type="checkbox"> Videos
              </label>
              <label class="btn btn-default-active">
                <input type="checkbox"> Documents
              </label>
              <label class="btn btn-default-active">
                <input type="checkbox"> Music
              </label>
            </div>
        </div>

        <div class="panel">
            <div class="panel-body nopaddingtop">
              <ul class="pagination pagination-bordered">
                <li class="disabled"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
              </ul>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">Panel With Default Heading</h4>
            </div>
            <div class="panel-body">
              <p>Graeco feugait ea quo. Quot erat vidit ad nam, mea quod nostro dolores ad. Elitr theophrastus vis ex. Volutpat consulatu vel ex. Viderer consulatu ei pro, in has aliquid placerat philosophia, timeam admodum minimum vim no.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-6">
              <div class="panel panel-primary-full">
                <div class="panel-heading">
                  <h3 class="panel-title">Primary Background Panel</h3>
                </div>
                <div class="panel-body">
                  <p class="nomargin">Graeco feugait ea quo. Quot erat vidit ad nam, mea quod nostro dolores ad. Elitr theophrastus vis ex. Volutpat consulatu vel ex. Viderer consulatu ei pro, in has aliquid placerat philosophia, timeam admodum minimum vim no.</p>
                </div>
              </div><!-- panel -->
            </div><!-- col-sm-6 -->

            <div class="col-md-4 col-sm-6">
              <div class="panel panel-danger-full">
                <div class="panel-heading">
                  <h3 class="panel-title">Danger Background Panel</h3>
                </div>
                <div class="panel-body">
                  <p class="nomargin">Graeco feugait ea quo. Quot erat vidit ad nam, mea quod nostro dolores ad. Elitr theophrastus vis ex. Volutpat consulatu vel ex. Viderer consulatu ei pro, in has aliquid placerat philosophia, timeam admodum minimum vim no.</p>
                </div>
              </div><!-- panel -->
            </div><!-- col-sm-6 -->
            <div class="col-md-4 col-sm-6">
              <div class="panel panel-info-full">
                <div class="panel-heading">
                  <h3 class="panel-title">Info Background Panel</h3>
                </div>
                <div class="panel-body">
                  <p class="nomargin">Graeco feugait ea quo. Quot erat vidit ad nam, mea quod nostro dolores ad. Elitr theophrastus vis ex. Volutpat consulatu vel ex. Viderer consulatu ei pro, in has aliquid placerat philosophia, timeam admodum minimum vim no.</p>
                </div>
              </div><!-- panel -->
            </div><!-- col-sm-6 -->
        </div>

        <div class="row">
            <div class="col-md-6">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs">
                <li class="active"><a aria-expanded="true" href="#popular" data-toggle="tab">Popular</a></li>
                <li class=""><a aria-expanded="false" href="#recent" data-toggle="tab">Recent</a></li>
                <li class=""><a aria-expanded="false" href="#comments" data-toggle="tab">Comments</a></li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content mb20">
                <div class="tab-pane active" id="popular">
                  Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                </div>
                <div class="tab-pane" id="recent">
                  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
                <div class="tab-pane" id="comments">
                  Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.
                </div>
              </div>
            </div>

            <div class="col-md-6">
                <div class="row tab-side-wrapper">
                    <div class="col-xs-4 col-sm-3 tab-left">
                      <!-- Nav tabs -->
                      <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a aria-expanded="true" href="#popular3" data-toggle="tab"><strong>Popular</strong></a></li>
                        <li class=""><a aria-expanded="false" href="#recent3" data-toggle="tab"><strong>Recent</strong></a></li>
                        <li class=""><a aria-expanded="false" href="#comments3" data-toggle="tab"><strong>Comments</strong></a></li>
                      </ul>
                    </div>
                    <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3 tab-main">
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div class="tab-pane active" id="popular3">
                          Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                        </div>
                        <div class="tab-pane" id="recent3">
                          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                        <div class="tab-pane" id="comments3">
                          Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row tab-side-wrapper">
            <div class="col-xs-8 col-sm-9 tab-main">
              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane active" id="popular4">
                  Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                </div>
                <div class="tab-pane" id="recent4">
                  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
                <div class="tab-pane" id="comments4">
                  Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.
                </div>
              </div>
            </div>
            <div class="col-xs-4 col-sm-3 tab-right">
              <!-- Nav tabs -->
              <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#popular4" data-toggle="tab"><strong>Popular</strong></a></li>
                <li><a href="#recent4" data-toggle="tab"><strong>Recent</strong></a></li>
                <li><a href="#comments4" data-toggle="tab"><strong>Comments</strong></a></li>
              </ul>
            </div>
        </div>
    
        <div class="row">
            <div class="col-md-4 col-sm-6">
              <div class="panel-group" id="accordion8">
                <div class="panel panel-inverse">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion8" href="#collapseOne8">
                        Product Details
                      </a>
                    </h4>
                  </div>
                  <div id="collapseOne8" class="panel-collapse collapse in">
                    <div class="panel-body">
                      Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                  </div>
                </div>
                <div class="panel panel-inverse">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" class="collapsed" data-parent="#accordion8" href="#collapseTwo8">
                        Specifications
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo8" class="panel-collapse collapse">
                    <div class="panel-body">
                      Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores.
                    </div>
                  </div>
                </div>
                <div class="panel panel-inverse">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" class="collapsed" data-parent="#accordion8" href="#collapseThree8">
                        Accessories
                      </a>
                    </h4>
                  </div>
                  <div id="collapseThree8" class="panel-collapse collapse">
                    <div class="panel-body">
                      Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <strong>Oh snap!</strong> Change a <a href="" class="alert-link">few things</a> up and try submitting again.
                </div>      
            </div>
            <div class="col-md-6">
                <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <strong>Well done!</strong> You successfully read this <a href="" class="alert-link">important alert message</a>.
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
              <div class="panel">
                <div class="panel-heading">
                  <h4 class="panel-title">Body Copy</h4>
                  <p>Bootstrap's global default font-size is 14px, with a line-height of 1.428. This is applied to the <code>&lt;body&gt;</code> and all paragraphs. In addition, <code>&lt;p&gt;</code> receive a bottom margin of half their computed line-height (10px by default).</p>
                </div><!-- panel-heading -->
                <div class="panel-body">
                  <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
                  <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.</p>
                </div>
              </div><!-- panel -->
            </div>
        </div>

        <div class="row">
            <div class="panel-body paddingtop10">
              <div class="btn-demo">
                <button class="btn btn-default btn-lg">Default</button>
                <button class="btn btn-primary btn-block">Primary</button>
                <button class="btn btn-success">Success</button>
                <button class="btn btn-warning btn-sm">Warning</button>
                <button class="btn btn-danger btn-xs">Danger</button>
                <button class="btn btn-info btn-quirk">Info</button>
              </div>
            </div>
        </div>

	</div>
	<div class="col-md-3 col-lg-4 dash-right">
          
        <div class="row">
            <!-- Weather Forecast -->
            <div class="col-sm-5 col-md-12 col-lg-6">
              <div class="panel panel-danger panel-weather">
                <div class="panel-heading">
                  <h4 class="panel-title">Weather Forecast</h4>
                </div>
                <div class="panel-body inverse">
                  <div class="row mb10">
                    <div class="col-xs-6">
                      <h2 class="today-day">Monday</h2>
                      <h3 class="today-date">July 13, 2015</h3>
                    </div>
                    <div class="col-xs-6">
                      <i class="fa fa-cloud today-cloud"></i>
                    </div>
                  </div>
                  <p class="nomargin">Thunderstorm in the area of responsibility this afternoon through this evening.</p>
                  <div class="row mt10">
                    <div class="col-xs-7">
                      <strong>Temperature:</strong> (Celcius) 19
                    </div>
                    <div class="col-xs-5">
                      <strong>Wind:</strong> 30+ mph
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Previous Announcements -->
            <div class="col-sm-5 col-md-12 col-lg-6">
              <div class="panel panel-primary list-announcement">
                <div class="panel-heading">
                  <h4 class="panel-title">Previous Announcements</h4>
                </div>
                <div class="panel-body">
                  <ul class="list-unstyled mb20">
                    <li>
                      <a href="">Testing Credit Card Payments on...</a>
                      <small>June 30, 2015 <a href="">7 shares</a></small>
                    </li>
                    <li>
                      <a href="">A Shopping Cart for New and...</a>
                      <small>June 15, 2015 &nbsp; <a href="">11 shares</a></small>
                    </li>
                  </ul>
                </div>
                <div class="panel-footer">
                  <button class="btn btn-primary btn-block">View More Announcements <i class="fa fa-arrow-right"></i></button>
                </div>
              </div>
            </div>
        </div>
        <div class="row">
            <!-- Recent User Activity -->
            <div class="col-sm-5 col-md-12 col-lg-6">
              <div class="panel panel-success">
                <div class="panel-heading">
                  <h4 class="panel-title">Recent User Activity</h4>
                </div>
                <div class="panel-body">
                  <ul class="media-list user-list">
                    <li class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object img-circle" src="images/photos/user2.png" alt="">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading nomargin"><a href="">Floyd M. Romero</a></h4>
                        is now following <a href="">Christina R. Hill</a>
                        <small class="date"><i class="fa fa-clock-o"></i> Just now</small>
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object img-circle" src="images/photos/user10.png" alt="">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading nomargin"><a href="">Roberta F. Horn</a></h4>
                        commented on <a href="">HTML5 Tutorial</a>
                        <small class="date"><i class="fa fa-clock-o"></i> Yesterday</small>
                      </div>
                    </li>
                  </ul>
                </div>
              </div><!-- panel -->
            </div>
            <!-- Most Followed Users -->
            <div class="col-sm-5 col-md-12 col-lg-6">
              <div class="panel panel-inverse">
                <div class="panel-heading">
                  <h4 class="panel-title">Most Followed Users</h4>
                </div>
                <div class="panel-body">
                  <ul class="media-list user-list">
                    <li class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object img-circle" src="images/photos/user9.png" alt="">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="">Ashley T. Brewington</a></h4>
                        <span>5,323</span> Followers
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object img-circle" src="images/photos/user10.png" alt="">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="">Roberta F. Horn</a></h4>
                        <span>4,100</span> Followers
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- People You May Know -->
            <div class="col-sm-6 col-md-12">
                <div class="panel">
                  <div class="panel-heading">
                    <h4 class="panel-title">People You May Know</h4>
                  </div>
                  <div class="panel-body">
                    <ul class="media-list user-list">
                      <li class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object img-circle" src="../images/photos/user9.png" alt="">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="">Ashley T. Brewington</a></h4>
                          <span>5,323</span> Followers
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object img-circle" src="../images/photos/user10.png" alt="">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="">Roberta F. Horn</a></h4>
                          <span>4,100</span> Followers
                        </div>
                      </li>
                    </ul>
                  </div>
                </div><!-- panel -->
            </div>
            <!-- Following Activity -->
            <div class="col-sm-6 col-md-12">
                <div class="panel">
                  <div class="panel-heading">
                    <h4 class="panel-title">Following Activity</h4>
                  </div>
                  <div class="panel-body">
                    <ul class="media-list user-list">
                      <li class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object img-circle" src="../images/photos/user2.png" alt="">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading nomargin"><a href="">Floyd M. Romero</a></h4>
                          is now following <a href="">Christina R. Hill</a>
                          <small class="date"><i class="fa fa-clock-o"></i> Just now</small>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-left">
                          <a href="#">
                            <img class="media-object img-circle" src="../images/photos/user10.png" alt="">
                          </a>
                        </div>
                        <div class="media-body">
                          <h4 class="media-heading nomargin"><a href="">Roberta F. Horn</a></h4>
                          commented on <a href="">HTML5 Tutorial</a>
                          <small class="date"><i class="fa fa-clock-o"></i> Yesterday</small>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div><!-- panel -->
            </div>
        </div>

        <div class="row">
          <!-- Get Connected -->
          <div class="col-md-6">
            <div class="panel">
              <div class="panel-heading">
                <h4 class="panel-title">Get Connected!</h4>
                <p>Just select any of your available social account to get started.</p>
              </div>
              <div class="panel-body">
                <button data-original-title="Facebook" class="btn btn-primary btn-stroke btn-icon tooltips mr5" data-toggle="toggle" title=""><i class="fa fa-facebook"></i></button>
                <button data-original-title="Twitter" class="btn btn-info btn-stroke btn-icon tooltips mr5" data-toggle="toggle" title=""><i class="fa fa-twitter"></i></button>
                <button data-original-title="Google Plus" class="btn btn-danger btn-stroke btn-icon tooltips mr5" data-toggle="toggle" title=""><i class="fa fa-google-plus"></i></button>
                <button data-original-title="Linkedin" class="btn btn-primary btn-stroke btn-icon tooltips" data-toggle="toggle" title=""><i class="fa fa-linkedin"></i></button>
              </div>
            </div>
          </div>
          <!-- Get Connected -->
          <div class="col-md-6">
            <div class="panel panel-inverse-full">
              <div class="panel-heading">
                <h4 class="panel-title">Get Connected!</h4>
                <p>Just select any of your available social account to get started.</p>
              </div>
              <div class="panel-body">
                <button class="btn btn-primary btn-stroke btn-icon mr5"><i class="fa fa-facebook"></i></button>
                <button class="btn btn-info btn-stroke btn-icon mr5"><i class="fa fa-twitter"></i></button>
                <button class="btn btn-danger btn-stroke btn-icon mr5"><i class="fa fa-google-plus"></i></button>
                <button class="btn btn-primary btn-stroke btn-icon"><i class="fa fa-linkedin"></i></button>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
            <!-- Navigation -->
            <div class="col-md-12">
                <div class="nav-wrapper quirk">
                  <h5 class="sidebar-title">Navigation</h5>
                  <ul class="nav nav-pills nav-stacked nav-quirk nav-dark-info">
                    <li><a href="#"><i class="fa fa-home"></i> <span>Home</span></a></li>
                    <li class="nav-parent active">
                      <a href=""><i class="fa fa-star"></i> <span>Features</span></a>
                      <ul class="children">
                        <li><a href="">PSD</a></li>
                        <li><a href="">HTML+CSS</a></li>
                        <li><a href="">Mobile Apps</a></li>
                      </ul>
                    </li>
                    <li class="nav-parent">
                      <a href=""><i class="fa fa-file"></i> <span>Blog</span></a>
                      <ul class="children">
                        <li><a href="">Recent</a></li>
                        <li><a href="">Popular</a></li>
                      </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-envelope"></i> <span>Contact Us</span></a></li>
                  </ul>
                </div>
            </div>
        </div>
        
        <!-- Folders -->
        <div class="panel">
          <div class="panel-heading">
            <h4 class="panel-title">Folders</h4>
          </div>
          <div class="panel-body">
            <ul class="folder-list">
              <li><a href=""><i class="fa fa-folder-open"></i> My Pictures</a></li>
              <li><a href=""><i class="fa fa-folder-open"></i> Facebook Photos</a></li>
              <li><a href=""><i class="fa fa-folder-open"></i> My Collection</a></li>
              <li><a href=""><i class="fa fa-folder-open"></i> Illustrations</a></li>
              <li><a href=""><i class="fa fa-folder-open"></i> TV Series</a></li>
              <li><a href=""><i class="fa fa-folder-open"></i> Downloaded Movies</a></li>
              <li><a href=""><i class="fa fa-folder-open"></i> E-book</a></li>
            </ul>
          </div>
        </div>

        <div class="panel fm-sidebar">
            <ul class="tag-list">
              <li><a href="">Animation</a></li>
              <li><a href="">Design</a></li>
              <li><a href="">Trailer</a></li>
              <li><a href="">Short Film</a></li>
              <li><a href="">Dubstep</a></li>
              <li><a href="">Soundtrack</a></li>
              <li><a href="">Photography</a></li>
              <li><a href="">Macro</a></li>
              <li><a href="">Tuturials</a></li>
              <li><a href="">Documentation</a></li>
            </ul> 
        </div>

	</div>
</div>
<?php $this->endContent();?>