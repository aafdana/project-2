

<?php $__env->startSection('content'); ?>
        <div class="content">
                <div class="orders">
                <?php if(auth()->user()->role == 'admin'): ?>
                        <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="box-title">Daftar Materi</strong>
                                    <form action="<?php echo e(url('/category/create')); ?>" method="post">
                                    <?php echo e(csrf_field()); ?>

                                        <button type="button" class="btn btn-primary btn-sm mb-1" data-toggle="modal" data-target="#smallmodal">
                                        <i class="fa fa-plus"></i>
                                        </button>
                                    </form>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="smallmodalLabel">Tambah Materi</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true"><i class="fa fa-close"></i></span> 
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?php echo e(url('/tambahmateri')); ?>" method="post">
                                                <?php echo e(csrf_field()); ?>

                                                     <div class="form-group">
                                                        <label>Nama Materi</label>
                                                        <input name="nama" type="text" class="form-control <?php $__errorArgs = ['nama_category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Nama Materi">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Deskripsi</label>
                                                        <input name="deskripsi" type="text" class="form-control <?php $__errorArgs = ['nama_category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Deskripsi">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Label</label>
                                                        <input name="label" type="text" class="form-control <?php $__errorArgs = ['nama_category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Gratis/VIP">
                                                    </div>          
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal edit -->
                                <div class="modal fade" id="smallmodal1" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="smallmodalLabel">Edit Materi</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true"><i class="fa fa-close"></i></span> 
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/editmateri/<?php echo e($kategorivideo->id_kategorivideo); ?>" method="post">
                                                <?php echo method_field('patch'); ?>
                                                <?php echo e(csrf_field()); ?>

                                                     <div class="form-group">
                                                        <label>Nama Materi</label>
                                                        <input name="nama" type="text" class="form-control <?php $__errorArgs = ['nama_category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Nama Materi" value="<?php echo e($kategorivideo->nama); ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Deskripsi</label>
                                                        <input name="deskripsi" type="text" class="form-control <?php $__errorArgs = ['nama_category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Deskripsi" value="<?php echo e($kategorivideo->deskripsi); ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Label</label>
                                                        <input name="label" type="text" class="form-control <?php $__errorArgs = ['nama_category'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Gratis/VIP" value="<?php echo e($kategorivideo->label); ?>">
                                                    </div>          
                                            </div>
                                            
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            <?php endif; ?>
                        <div class="row">
                        <?php $__currentLoopData = $kategorivideo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-4"><a href="/listvideo/<?php echo e($kat->id_kategorivideo); ?>">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title"><?php echo e($kat->nama); ?><small><span class="badge badge-warning float-right mt-1"><?php echo e($kat->label); ?></span></small></strong>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text"><?php echo e($kat->deskripsi); ?></p>
                                    </div>
                                    <button type="button" class="btn btn-primary btn-sm mb-1" data-toggle="modal" data-target="#smallmodal1">
                                        <i class="fa fa-pencil"></i>
                                        </button>
                                </div></a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        </div>
                </div>
        </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp74\htdocs\Hope\resources\views/layouts/edhope.blade.php ENDPATH**/ ?>