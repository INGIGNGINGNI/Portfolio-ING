<div class="container mt-5" id="project">
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
                                type="button" role="tab" aria-controls="tab-3" aria-selected="false">งานกราฟิกอื่น ๆ</button>
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