<textarea class="form-control richTextBox" name="<?php echo e($row->field); ?>" id="richtext<?php echo e($row->field); ?>">
    <?php echo e(old($row->field, $dataTypeContent->{$row->field} ?? '')); ?>

</textarea>

<?php $__env->startPush('javascript'); ?>
    <script>
        $(document).ready(function() {
            var additionalConfig = {
                selector: 'textarea.richTextBox[name="<?php echo e($row->field); ?>"]',
            }

            $.extend(additionalConfig, <?php echo json_encode($options->tinymceOptions ?? (object)[]); ?>)

            tinymce.init(window.voyagerTinyMCE.getConfig(additionalConfig));
        });
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\Users\Rena\Documents\Curso-Mob-e-Web-do-Explicador\laravel_Framework\emazagame\vendor\tcg\voyager\src/../resources/views/formfields/rich_text_box.blade.php ENDPATH**/ ?>