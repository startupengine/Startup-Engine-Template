<div class="wrapper" style="padding:0px;overflow: hidden;">
    <div class="page-header page-header-small"
         style="display: block;height:440px !important;background-color:#000;z-index:0;">
        <div id="header-image" class="page-header-image "
             style="float:left; background-size: cover !important; background-color:#000;background:url({{$page->content()->heading->background}});opacity:0.5;z-index:1;">
        </div>
        <div class="container">
            <div class="content-center" id="headerText">
                <h2 class="title"
                    style="font-weight:600 !important;">{!! $page->markdown($page->content()->heading->headline) !!}</h2>
                <h4 class="text-center">{!! $page->markdown($page->content()->heading->intro) !!}</h4>
                <div id="emailForm" class="form-group" align="center" style="padding:15px;">


                    <div class="column is-12">
                        <p :class="{ 'control': false }">
                        <div class="input-group" style="max-width:550px;">
                            <input class="form-control" id="s" data-vv-delay="500" v-validate="'required|email'" :class="{'input': true, 'is-danger': errors.has('email') }" name="email" type="text" placeholder="Email Address" autocomplete="off">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-outline-secondary" type="button"
                                        id="registerButton"><i
                                            class="fa fa-envelope"></i>&nbsp; <span
                                            class="hiddenOnDesktop">Sign Up</span><span class="hiddenOnMobile">Request Invitation</span>
                                </button>
                            </div>
                        </div>
                        <span v-show="errors.has('email')" class="help is-danger">@{{ errors.first('email') }}</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if($page->content() !== null && isset($page->content()->alert) && $page->content()->alert->message !== null)
        <div id="alert" class="section text-center" style="background:orangered;margin:0px;padding:15px;">
            <p style="font-size:25px;color:#fff;margin:0px;" id="alertMessage">{!! $page->markdown($page->content()->alert->message) !!}</p>
        </div>
    @endif
    <div class="section text-center" style="background:none;padding-bottom:0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    @if($page->content() !== null && $page->content()->content->video !== null)
                        <div class="card" id="video">
                            <div class="card-body">
                                <?php if($page->content() !== null && $page->content()->content->image !== null && $page->content()->content->video == null){ ?>
                                <div id="featuredImage"
                                     style="background:url('{{ $page->content()->content->image }}');"></div>
                                <?php } ?>

                                <?php if($page->content() !== null && $page->content()->content->video !== null){ ?>
                                <?php $video = $page->content()->content->video; ?>
                                <?php
                                if (strpos($page->content()->content->video, 'youtube') > 0) {
                                    $videotype = 'youtube';
                                } elseif (strpos($url, 'vimeo') > 0) {
                                    $videotype = 'vimeo';
                                } else {
                                    $videotype = 'unknown';
                                }
                                ?>
                                <?php
                                if ($videotype == "youtube") {
                                    $url = $video;
                                    parse_str(parse_url($url, PHP_URL_QUERY), $array);
                                    $video = $array['v'];
                                }
                                if ($videotype == "vimeo") {
                                    $video = (int)substr(parse_url($video, PHP_URL_PATH), 1);
                                } ?>
                                <video class="afterglow" id="featuredvideo" width="960" height="450"
                                       @if($video == null) src="{{ $page->content()->content->video }}" @endif
                                       @if($video !== null) data-{{ $videotype }}-id="{{ $video }}" @endif
                                       @if($page->content()->content->image !== null) poster="{{ $page->content()->content->image }}" @endif >

                                    @if($videotype !== "youtube" && $videotype !== "vimeo")
                                        <source type="video/mp4" src="{{ $page->content()->content->video }}"/>
                                    @endif

                                </video>
                                <?php } ?>
                            </div>
                        </div>
                    @elseif($page->content()->content->image !== null && $page->content()->content->video == null)
                        <div class="featured-image"
                             style="background:url('{{ $page->content()->content->image }}');min-height:200px;height:auto; border-radius:5px 5px 0px 0px;   background-size:cover;background-position:center;">
                            <img src="{{ $page->content()->content->image }}" style="visibility: hidden;"/>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-body" style="text-align:left;">
                            {!! $page->markdown($page->content()->content->description) !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="card" id="topics">
                        <div class="card-body" style="min-height:auto;">
                            <strong>Topics Covered</strong><br>
                            <div style="text-align:left;">
                                {!! $page->markdown($page->content()->sidebar->topics) !!}
                            </div>
                        </div>
                    </div>
                    <div class="card" id="date">
                        <div class="card-body" style="min-height:auto;">
                            <strong>Date</strong><br>
                            <div style="text-align:center;">
                                <br>
                                <span id="dateText">{{ $page->content()->sidebar->date }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="card" id="host">
                        <div class="card-body" style="min-height:auto;">
                            <strong>Hosted By</strong><br>
                            <div style="text-align:left;">
                                <div style="text-align:center;">
                                    <img src="{{ $page->content()->sidebar->host_image }}"
                                         style="display:inline-block;height:60px;width:60px;border-radius:30px;margin-right:10px;"><br>
                                    <span id="hostName">{{ $page->content()->sidebar->host_name }}</span><br>
                                    <span id="hostTitle">{{ $page->content()->sidebar->host_title }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(isset($page->content()->call_to_action) && (isset($page->content()->call_to_action->headline) OR isset($page->content()->call_to_action->link) OR isset($page->content()->call_to_action->message)))
        <section class="section text-center" style="background:none;color:#555;">
            <div class="container">
                <div class="row align-items-center text-center">
                    <div class="col-lg-12 text-center">
                        @if(isset($page->content()->call_to_action->headline))
                            <h3>{!! $page->markdown($page->content()->call_to_action->headline) !!}</h3>@endif
                        @if(isset($page->content()->call_to_action->button) && isset($page->content()->call_to_action->link))
                            <a href="{{ $page->content()->call_to_action->link }}" onclick="$('#s').focus();"
                               class="btn btn-lg btn-primary btn-round bg-gradient-orange grow">{!! $page->content()->call_to_action->button !!}</a>@endif
                    </div>
                </div>
            </div>
        </section>
    @endif
</div>