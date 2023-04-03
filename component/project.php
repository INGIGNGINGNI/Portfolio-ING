<div class="container mt-lg-5 tab-show" id="project">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <h2>ผลงาน</h2>
            <div class="underline"></div>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="d-flex align-items-start">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <button class="nav-link my-3 active" id="tab-1-tab" data-bs-toggle="pill"
                                data-bs-target="#tab-1" type="button" role="tab" aria-controls="tab-1"
                                aria-selected="true">เว็บไซต์และแอป</button>
                            <button class="nav-link my-3" id="tab-2-tab" data-bs-toggle="pill" data-bs-target="#tab-2"
                                type="button" role="tab" aria-controls="tab-2" aria-selected="false">Prototype
                                Design</button>
                            <button class="nav-link my-3" id="tab-3-tab" data-bs-toggle="pill" data-bs-target="#tab-3"
                                type="button" role="tab" aria-controls="tab-3" aria-selected="false">งานกราฟิกอื่น
                                ๆ</button>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="tab-1" role="tabpanel"
                                aria-labelledby="tab-1-tab" tabindex="0"><?php include "project/website-project.php" ?>
                            </div>
                            <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2-tab"
                                tabindex="0"><?php include "project/prototype-project.php" ?></div>
                            <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3-tab"
                                tabindex="0"><?php include "project/graphic-project.php" ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-lg-5 accordion-show">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h2>ผลงาน</h2>
                <div class="underline"></div>
            </div>
        </div>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        เว็บไซต์และแอป
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <?php include "project/website-project.php" ?>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Prototype Design
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <?php include "project/prototype-project.php" ?>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        งานกราฟิกอื่น ๆ
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <?php include "project/graphic-project.php" ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>