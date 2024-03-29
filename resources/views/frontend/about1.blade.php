@extends('layouts.app')
@section('title', 'About')

@section('content')
<div class="mdl-container mdl-grid">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <div class="mdl-layout__header mdl-layout__header--scroll">
            <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--white">
              <a href="#overview" class="mdl-layout__tab is-active" style="color: black;">Overview</a>
              <a href="#features" class="mdl-layout__tab" style="color: black;">Features</a>
              <a href="#features" class="mdl-layout__tab" style="color: black;">Details</a>
              <a href="#features" class="mdl-layout__tab" style="color: black;">Technology</a>
              <a href="#features" class="mdl-layout__tab" style="color: black;">FAQ</a>
            </div>
        </div>
        <div class="mdl-layout__content">
            <div class="mdl-layout__tab-panel is-active" id="overview">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="box" style="padding: 40px;border-top: 2px solid #d2d6de;">
                            <div class="row">
                                <div class="col-md-7">
                                <p>The Police Department (NYPD) is committed to providing, with the utmost integrity and respect, a safe and secure environment for the public.</p>
                                </div>
                                <div class="col-md-5"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="box">
                                    <div class="box-header"><h3 class="box-title">Operating Acitivities</h3></div>
                                    <div class="box-body">
                                        <div class="row" style="padding: 40px;">
                                            <div class="col-sm-6">
                                                <h4 class="box-body-operating">NYC Services</h4>
                                                <h2 class="box-body-operating"><b>0</b></h2>
                                            </div>
                                            <div class="col-sm-6">
                                                <h4 class="box-body-operating">Capital Projects</h4>
                                                <h2 class="box-body-operating"><b>82</b></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="box">
                                    <div class="box-header"><h3 class="box-title">Total Budgets</h3></div>
                                    <div class="box-body">
                                        <div class="row" style="padding: 40px;">
                                            <div class="col-sm-6">
                                                <h4 class="box-body-budget">Expense Budget</h4>
                                                <h2 class="box-body-budget"><b>$5.38 B</b></h2>
                                            </div>
                                            <div class="col-sm-6">
                                                <h4 class="box-body-budget">Capital Budgets</h4>
                                                <h2 class="box-body-budget"><b>$1.18 B</b></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="box" style="border-top: 2px solid #d2d6de;">
                            <div id="mymap" style="width: 100%; height: 400px;"></div>
                            <div class="box-footer text-center" style="height: 115px;">
                                <a class="btn btn-app btn-link">
                                    <i class="fa md md-phone"></i> Call
                                    <div class="ripple-container"></div>
                                </a>
                                <a class="btn btn-app btn-link">
                                    <i class="fa md md-place"></i> Location
                                    <div class="ripple-container"></div>
                                </a>
                                <a class="btn btn-app btn-link">
                                    <i class="fa md md-link"></i> Edit
                                    <div class="ripple-container"></div>
                                </a>
                                <a class="btn btn-app btn-link">
                                    <i class="fa md md-publish"></i> Share
                                    <div class="ripple-container"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="box text-center" style="min-height: 390px;">
                            <p class="text-feed">Twitter feed</p>
                            <button class="btn btn-tweet">Tweet at NYPD</button>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="box text-center" style="min-height: 390px;">
                            <p class="text-feed">Facebook feed</p>
                            <button class="btn btn-facebook">Follow NYPD</button>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="box text-center" style="min-height: 390px;">
                            <p class="text-feed">RSS Feed</p>
                        </div>
                    </div>
                </div> 
            </div>
        <div class="mdl-layout__tab-panel" id="features">
            <section class="section--center mdl-grid mdl-grid--no-spacing">
                <div class="mdl-cell mdl-cell--12-col">
                  <h4>Features</h4>
                  Minim duis incididunt est cillum est ex occaecat consectetur. Qui sint ut et qui nisi cupidatat. Reprehenderit nostrud proident officia exercitation anim et pariatur ex.
                  <ul class="toc">
                    <h4>Contents</h4>
                    <a href="#lorem1">Lorem ipsum</a>
                    <a href="#lorem2">Lorem ipsum</a>
                    <a href="#lorem3">Lorem ipsum</a>
                    <a href="#lorem4">Lorem ipsum</a>
                    <a href="#lorem5">Lorem ipsum</a>
                  </ul>

                  <h5 id="lorem1">Lorem ipsum dolor sit amet</h5>
                  Excepteur et pariatur officia veniam anim culpa cupidatat consequat ad velit culpa est non.
                  <ul>
                    <li>Nisi qui nisi duis commodo duis reprehenderit consequat velit aliquip.</li>
                    <li>Dolor consectetur incididunt in ipsum laborum non et irure pariatur excepteur anim occaecat officia sint.</li>
                    <li>Lorem labore proident officia excepteur do.</li>
                  </ul>

                  <p>
                    Sit qui est voluptate proident minim cillum in aliquip cupidatat labore pariatur id tempor id. Proident occaecat occaecat sint mollit tempor duis dolor cillum anim. Dolore sunt ea mollit fugiat in aliqua consequat nostrud aliqua ut irure in dolore. Proident aliqua culpa sint sint exercitation. Non proident occaecat reprehenderit veniam et proident dolor id culpa ea tempor do dolor. Nulla adipisicing qui fugiat id dolor. Nostrud magna voluptate irure veniam veniam labore ipsum deserunt adipisicing laboris amet eu irure. Sunt dolore nisi velit sit id. Nostrud voluptate labore proident cupidatat enim amet Lorem officia magna excepteur occaecat eu qui. Exercitation culpa deserunt non et tempor et non.
                  </p>
                  <p>
                    Do dolor eiusmod eu mollit dolore nostrud deserunt cillum irure esse sint irure fugiat exercitation. Magna sit voluptate id in tempor elit veniam enim cupidatat ea labore elit. Aliqua pariatur eu nulla labore magna dolore mollit occaecat sint commodo culpa. Eu non minim duis pariatur Lorem quis exercitation. Sunt qui ex incididunt sit anim incididunt sit elit ad officia id.
                  </p>
                  <p id="lorem2">
                    Tempor voluptate ex consequat fugiat aliqua. Do sit et reprehenderit culpa deserunt culpa. Excepteur quis minim mollit irure nulla excepteur enim quis in laborum. Aliqua elit voluptate ad deserunt nulla reprehenderit adipisicing sint. Est in eiusmod exercitation esse commodo. Ea reprehenderit exercitation veniam adipisicing minim nostrud. Veniam dolore ex ea occaecat non enim minim id ut aliqua adipisicing ad. Occaecat excepteur aliqua tempor cupidatat aute dolore deserunt ipsum qui incididunt aliqua occaecat sit quis. Culpa sint aliqua aliqua reprehenderit veniam irure fugiat ea ad.
                  </p>
                  <p>
                    Eu minim fugiat laborum irure veniam Lorem aliqua enim. Aliqua veniam incididunt consequat irure consequat tempor do nisi deserunt. Elit dolore ad quis consectetur sint laborum anim magna do nostrud amet. Ea nulla sit consequat quis qui irure dolor. Sint deserunt excepteur consectetur magna irure. Dolor tempor exercitation dolore pariatur incididunt ut laboris fugiat ipsum sunt veniam aute sunt labore. Non dolore sit nostrud eu ad excepteur cillum eu ex Lorem duis.
                  </p>
                  <p>
                    Id occaecat velit non ipsum occaecat aliqua quis ut. Eiusmod est magna non esse est ex incididunt aute ullamco. Cillum excepteur sint ipsum qui quis velit incididunt amet. Qui deserunt anim enim laborum cillum reprehenderit duis mollit amet ad officia enim. Minim sint et quis aliqua aliqua do minim officia dolor deserunt ipsum laboris. Nulla nisi voluptate consectetur est voluptate et amet. Occaecat ut quis adipisicing ad enim. Magna est magna sit duis proident veniam reprehenderit fugiat reprehenderit enim velit ex. Ullamco laboris culpa irure aliquip ad Lorem consequat veniam ad ipsum eu. Ipsum culpa dolore sunt officia laborum quis.
                  </p>

                  <h5 id="lorem3">Lorem ipsum dolor sit amet</h5>

                  <p id="lorem4">
                    Eiusmod nulla aliquip ipsum reprehenderit nostrud non excepteur mollit amet esse est est dolor. Dolore quis pariatur sit consectetur veniam esse ullamco duis Lorem qui enim ut veniam. Officia deserunt minim duis laborum dolor in velit pariatur commodo ullamco eu. Aute adipisicing ad duis labore laboris do mollit dolor cillum sunt aliqua ullamco. Esse tempor quis cillum consequat reprehenderit. Adipisicing proident anim eu sint elit aliqua anim dolore cupidatat fugiat aliquip qui.
                  </p>
                  <p id="lorem5">
                    Nisi eiusmod esse cupidatat excepteur exercitation ipsum reprehenderit nostrud deserunt aliqua ullamco. Anim est irure commodo eiusmod pariatur officia. Est dolor ipsum excepteur magna aliqua ad veniam irure qui occaecat eiusmod aute fugiat commodo. Quis mollit incididunt amet sit minim velit eu fugiat voluptate excepteur. Sit minim id pariatur ex cupidatat cupidatat nostrud nostrud ipsum.
                  </p>
                  <p>
                    Enim ea officia excepteur ad veniam id reprehenderit eiusmod esse mollit consequat. Esse non aute ullamco Lorem aliqua qui dolore irure eiusmod aute aliqua proident labore aliqua. Ipsum voluptate voluptate exercitation laborum deserunt nulla elit aliquip et minim ex veniam. Duis cupidatat aute sunt officia mollit dolor ad elit ad aute labore nostrud duis pariatur. In est sint voluptate consectetur velit ea non labore. Ut duis ea aliqua consequat nulla laboris fugiat aute id culpa proident. Minim eiusmod laboris enim Lorem nisi excepteur mollit voluptate enim labore reprehenderit officia mollit.
                  </p>
                  <p>
                    Cupidatat labore nisi ut sunt voluptate quis sunt qui ad Lorem esse nisi. Ex esse velit ullamco incididunt occaecat dolore veniam tempor minim adipisicing amet. Consequat in exercitation est elit anim consequat cillum sint labore cillum. Aliquip mollit laboris ad labore anim.
                  </p>
                </div>
            </section>
        </div>
      </div>
    </div>
</div>

@endsection
