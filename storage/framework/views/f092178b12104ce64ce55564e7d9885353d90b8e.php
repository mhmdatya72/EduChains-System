<?php $__env->startPush('libraries_top'); ?>
<link rel="stylesheet" href="/assets/vendors/summernote/summernote-bs4.min.css">
<?php $__env->stopPush(); ?>


<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="section-header">
            <h1>Installments Settings</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/admin">Dashboard</a></div>
                <div class="breadcrumb-item">Installments Settings</div>
            </div>
        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <ul class="nav nav-pills" id="myTab3" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="basic-tab" data-toggle="tab" href="#basic" role="tab" aria-controls="basic" aria-selected="true">Basic</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" id="terms-tab" data-toggle="tab" href="#terms" role="tab" aria-controls="terms" aria-selected="true">Terms &amp; Policies</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent2">
                                <div class="tab-pane mt-3 fade show active" id="basic" role="tabpanel" aria-labelledby="basic-tab">

                                <?php echo $__env->make('admin.financial.installments.settings.basic_tab', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                               </div>

                                <div class="tab-pane mt-3 fade" id="terms" role="tabpanel" aria-labelledby="terms-tab">
                                <?php echo $__env->make('admin.financial.installments.settings.terms_tab', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                            </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts_bottom'); ?>
<script src="/assets/vendors/summernote/summernote-bs4.min.js"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\moul\Desktop\inom\educhains\educhains\resources\views/admin/financial/installments/settings/index.blade.php ENDPATH**/ ?>