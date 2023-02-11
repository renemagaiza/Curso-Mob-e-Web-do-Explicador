<input <?php if($row->required == 1): ?> required <?php endif; ?> type="text" class="form-control" name="<?php echo e($row->field); ?>"
        placeholder="<?php echo e(old($row->field, $options->placeholder ?? $row->getTranslatedAttribute('display_name'))); ?>"
       <?php echo isBreadSlugAutoGenerator($options); ?>

       value="<?php echo e(old($row->field, $dataTypeContent->{$row->field} ?? $options->default ?? '')); ?>">
<?php /**PATH C:\Users\Rena\Documents\Curso-Mob-e-Web-do-Explicador\laravel_Framework\emazagame\vendor\tcg\voyager\src/../resources/views/formfields/text.blade.php ENDPATH**/ ?>