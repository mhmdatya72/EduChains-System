<?php $__env->startPush('styles_top'); ?>
    <link rel="stylesheet" href="/assets/admin/vendor/bootstrap-colorpicker/bootstrap-colorpicker.min.css">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="section-header">
            <h1><?php echo e(trans('update.top_bottom_bar')); ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo e(getAdminPanelUrl()); ?>"><?php echo e(trans('admin/main.dashboard')); ?></a></div>
                <div class="breadcrumb-item"><?php echo e(trans('update.top_bottom_bar')); ?></div>
            </div>
        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <form action="<?php echo e(getAdminPanelUrl('/floating_bars')); ?>" method="post">
                                <?php echo e(csrf_field()); ?>

                                <input type="hidden" name="preview" value="">

                                <div class="row">

                                    <div class="col-12 col-md-6">

                                        <?php if(!empty(getGeneralSettings('content_translate'))): ?>
                                            <div class="form-group">
                                                <label class="input-label"><?php echo e(trans('auth.language')); ?></label>
                                                <select name="locale" class="form-control <?php echo e(!empty($floatingBar) ? 'js-edit-content-locale' : ''); ?>">
                                                    <?php $__currentLoopData = $userLanguages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($lang); ?>" <?php if(mb_strtolower(request()->get('locale', app()->getLocale())) == mb_strtolower($lang)): ?> selected <?php endif; ?>><?php echo e($language); ?> <?php echo e((!empty($definedLanguage) and is_array($definedLanguage) and in_array(mb_strtolower($lang), $definedLanguage)) ? '('. trans('panel.content_defined') .')' : ''); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                                <?php $__errorArgs = ['locale'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="invalid-feedback">
                                                    <?php echo e($message); ?>

                                                </div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        <?php else: ?>
                                            <input type="hidden" name="locale" value="<?php echo e(getDefaultLocale()); ?>">
                                        <?php endif; ?>

                                        <div class="form-group">
                                            <label><?php echo e(trans('admin/main.title')); ?></label>
                                            <input type="text" name="title" value="<?php echo e(!empty($floatingBar) ? $floatingBar->title : old('title')); ?>" class="form-control "/>
                                        </div>

                                        <div class="form-group">
                                            <label><?php echo e(trans('public.description')); ?></label>
                                            <textarea type="text" name="description" rows="3" class="form-control "><?php echo e(!empty($floatingBar) ? $floatingBar->description : old('description')); ?></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label class="input-label"><?php echo e(trans('admin/main.start_date')); ?></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="dateRangeLabel">
                                                        <i class="fa fa-calendar"></i>
                                                    </span>
                                                </div>

                                                <input type="text" name="start_at" class="form-control text-center datetimepicker"
                                                       aria-describedby="dateRangeLabel" autocomplete="off"
                                                       value="<?php echo e((!empty($floatingBar) and !empty($floatingBar->start_at)) ? dateTimeFormat($floatingBar->start_at, 'Y-m-d H:i', false) : old('start_at')); ?>"/>
                                                <?php $__errorArgs = ['start_at'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="invalid-feedback">
                                                    <?php echo e($message); ?>

                                                </div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="input-label"><?php echo e(trans('admin/main.end_date')); ?></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="dateRangeLabel">
                                                        <i class="fa fa-calendar"></i>
                                                    </span>
                                                </div>

                                                <input type="text" name="end_at" class="form-control text-center datetimepicker"
                                                       aria-describedby="dateRangeLabel" autocomplete="off"
                                                       value="<?php echo e((!empty($floatingBar) and !empty($floatingBar->end_at)) ? dateTimeFormat($floatingBar->end_at, 'Y-m-d H:i', false) : old('end_at')); ?>"/>
                                                <?php $__errorArgs = ['end_at'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="invalid-feedback">
                                                    <?php echo e($message); ?>

                                                </div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>

                                        <div class="form-group mt-15">
                                            <label class="input-label"><?php echo e(trans('update.icon')); ?></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <button type="button" class="input-group-text admin-file-manager" data-input="icon" data-preview="holder">
                                                        <i class="fa fa-upload"></i>
                                                    </button>
                                                </div>
                                                <input type="text" name="icon" id="icon" value="<?php echo e(!empty($floatingBar) ? $floatingBar->icon : old('icon')); ?>" class="form-control <?php $__errorArgs = ['icon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"/>
                                                <div class="input-group-append">
                                                    <button type="button" class="input-group-text admin-file-view" data-input="icon">
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                </div>
                                                <?php $__errorArgs = ['icon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="invalid-feedback">
                                                    <?php echo e($message); ?>

                                                </div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>

                                        <div class="form-group mt-15">
                                            <label class="input-label"><?php echo e(trans('update.background_image')); ?></label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <button type="button" class="input-group-text admin-file-manager" data-input="background_image" data-preview="holder">
                                                        <i class="fa fa-upload"></i>
                                                    </button>
                                                </div>
                                                <input type="text" name="background_image" id="background_image" value="<?php echo e(!empty($floatingBar) ? $floatingBar->background_image : old('background_image')); ?>" class="form-control <?php $__errorArgs = ['background_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"/>
                                                <div class="input-group-append">
                                                    <button type="button" class="input-group-text admin-file-view" data-input="background_image">
                                                        <i class="fa fa-eye"></i>
                                                    </button>
                                                </div>
                                                <?php $__errorArgs = ['background_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="invalid-feedback">
                                                    <?php echo e($message); ?>

                                                </div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label><?php echo e(trans('update.title_color')); ?></label>
                                            <div class="input-group colorpickerinput">
                                                <input type="text" name="title_color" class="form-control" value="<?php echo e(!empty($floatingBar) ? $floatingBar->title_color : ''); ?>">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-fill-drip"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label><?php echo e(trans('update.description_color')); ?></label>
                                            <div class="input-group colorpickerinput">
                                                <input type="text" name="description_color" class="form-control" value="<?php echo e(!empty($floatingBar) ? $floatingBar->description_color : ''); ?>">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-fill-drip"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label><?php echo e(trans('update.background_color')); ?></label>
                                            <div class="input-group colorpickerinput">
                                                <input type="text" name="background_color" class="form-control" value="<?php echo e(!empty($floatingBar) ? $floatingBar->background_color : ''); ?>">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-fill-drip"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label><?php echo e(trans('update.btn_text')); ?></label>
                                            <input type="text" name="btn_text" value="<?php echo e(!empty($floatingBar) ? $floatingBar->btn_text : old('btn_text')); ?>" class="form-control "/>
                                        </div>

                                        <div class="form-group">
                                            <label><?php echo e(trans('update.btn_url')); ?></label>
                                            <input type="text" name="btn_url" value="<?php echo e(!empty($floatingBar) ? $floatingBar->btn_url : old('btn_url')); ?>" class="form-control "/>
                                        </div>

                                        <div class="form-group">
                                            <label><?php echo e(trans('update.btn_text_color')); ?></label>
                                            <div class="input-group colorpickerinput">
                                                <input type="text" name="btn_text_color" class="form-control" value="<?php echo e(!empty($floatingBar) ? $floatingBar->btn_text_color : ''); ?>">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-fill-drip"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label><?php echo e(trans('update.btn_color')); ?></label>
                                            <div class="input-group colorpickerinput">
                                                <input type="text" name="btn_color" class="form-control" value="<?php echo e(!empty($floatingBar) ? $floatingBar->btn_color : ''); ?>">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-fill-drip"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label><?php echo e(trans('update.bar_height')); ?> (px)</label>
                                            <input type="number" name="bar_height" value="<?php echo e(!empty($floatingBar) ? $floatingBar->bar_height : old('bar_height')); ?>" min="0" class="form-control "/>
                                        </div>

                                        <div class="form-group">
                                            <label><?php echo e(trans('update.bar_position')); ?></label>
                                            <select name="position" class="form-control">
                                                <option value="top" <?php echo e((!empty($floatingBar) and $floatingBar->position == 'top') ? 'selected' : ''); ?>><?php echo e(trans('update.top')); ?></option>
                                                <option value="bottom" <?php echo e((!empty($floatingBar) and $floatingBar->position == 'bottom') ? 'selected' : ''); ?>><?php echo e(trans('update.bottom')); ?></option>
                                            </select>
                                        </div>

                                        <div class="form-group custom-switches-stacked">
                                            <label class="custom-switch pl-0 d-flex align-items-center">
                                                <input type="hidden" name="fixed" value="0">
                                                <input type="checkbox" name="fixed" id="fixedSwitch" value="1" <?php echo e((!empty($floatingBar) and $floatingBar->fixed) ? 'checked="checked"' : ''); ?> class="custom-switch-input"/>
                                                <span class="custom-switch-indicator"></span>
                                                <label class="custom-switch-description mb-0 cursor-pointer" for="fixedSwitch"><?php echo e(trans('update.fixed')); ?></label>
                                            </label>
                                            <div class="text-muted text-small mt-1"><?php echo e(trans('update.top_bottom_bar_fixed_hint')); ?></div>
                                        </div>

                                        <div class="form-group custom-switches-stacked">
                                            <label class="custom-switch pl-0 d-flex align-items-center">
                                                <input type="hidden" name="enable" value="0">
                                                <input type="checkbox" name="enable" id="enableSwitch" value="1" <?php echo e((!empty($floatingBar) and $floatingBar->enable) ? 'checked="checked"' : ''); ?> class="custom-switch-input"/>
                                                <span class="custom-switch-indicator"></span>
                                                <label class="custom-switch-description mb-0 cursor-pointer" for="enableSwitch"><?php echo e(trans('update.enable')); ?></label>
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="">
                                    <button type="button" class="js-submit-form btn btn-primary"><?php echo e(trans('admin/main.save_change')); ?></button>
                                    <button type="button" class="js-preview-bar btn btn-warning ml-2"><?php echo e(trans('update.preview')); ?></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts_bottom'); ?>
    <script src="/assets/admin/vendor/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
    <script src="/assets/default/js/admin/floating_bar.min.js"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/inomtech/educhains.co/resources/views/admin/floating_bar/index.blade.php ENDPATH**/ ?>