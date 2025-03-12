

<?php $__env->startSection('title', 'Edit'); ?>

<?php $__env->startSection('header'); ?>

    <?php if (isset($component)) { $__componentOriginalfd1f218809a441e923395fcbf03e4272 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfd1f218809a441e923395fcbf03e4272 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfd1f218809a441e923395fcbf03e4272)): ?>
<?php $attributes = $__attributesOriginalfd1f218809a441e923395fcbf03e4272; ?>
<?php unset($__attributesOriginalfd1f218809a441e923395fcbf03e4272); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfd1f218809a441e923395fcbf03e4272)): ?>
<?php $component = $__componentOriginalfd1f218809a441e923395fcbf03e4272; ?>
<?php unset($__componentOriginalfd1f218809a441e923395fcbf03e4272); ?>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>

    <h1 class="text-3xl text-center my-10">Edit: <span><?php echo e($blog->title); ?></span></h1>

    <?php if (isset($component)) { $__componentOriginalf9a5f060e1fbbcbc7beb643b113b10ab = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf9a5f060e1fbbcbc7beb643b113b10ab = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form','data' => ['action' => '/blog/'.e($blog->id).'','method' => 'POST']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => '/blog/'.e($blog->id).'','method' => 'POST']); ?>
        <?php echo method_field('PATCH'); ?>
        <?php echo csrf_field(); ?>

        <label for="title">Title</label>
        <?php if (isset($component)) { $__componentOriginalb49d422197ecf44f2b4dafc7d8e70377 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb49d422197ecf44f2b4dafc7d8e70377 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.edit-input','data' => ['type' => 'text','name' => 'title','value' => ''.e($blog->title).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('edit-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','name' => 'title','value' => ''.e($blog->title).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb49d422197ecf44f2b4dafc7d8e70377)): ?>
<?php $attributes = $__attributesOriginalb49d422197ecf44f2b4dafc7d8e70377; ?>
<?php unset($__attributesOriginalb49d422197ecf44f2b4dafc7d8e70377); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb49d422197ecf44f2b4dafc7d8e70377)): ?>
<?php $component = $__componentOriginalb49d422197ecf44f2b4dafc7d8e70377; ?>
<?php unset($__componentOriginalb49d422197ecf44f2b4dafc7d8e70377); ?>
<?php endif; ?>
    
        <label for="text">Text</label>
        <?php if (isset($component)) { $__componentOriginalb49d422197ecf44f2b4dafc7d8e70377 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb49d422197ecf44f2b4dafc7d8e70377 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.edit-input','data' => ['type' => 'textarea','name' => 'text','value' => ''.e($blog->text).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('edit-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'textarea','name' => 'text','value' => ''.e($blog->text).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb49d422197ecf44f2b4dafc7d8e70377)): ?>
<?php $attributes = $__attributesOriginalb49d422197ecf44f2b4dafc7d8e70377; ?>
<?php unset($__attributesOriginalb49d422197ecf44f2b4dafc7d8e70377); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb49d422197ecf44f2b4dafc7d8e70377)): ?>
<?php $component = $__componentOriginalb49d422197ecf44f2b4dafc7d8e70377; ?>
<?php unset($__componentOriginalb49d422197ecf44f2b4dafc7d8e70377); ?>
<?php endif; ?>
        
        <?php if (isset($component)) { $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.button','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>Update <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $attributes = $__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__attributesOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561)): ?>
<?php $component = $__componentOriginald0f1fd2689e4bb7060122a5b91fe8561; ?>
<?php unset($__componentOriginald0f1fd2689e4bb7060122a5b91fe8561); ?>
<?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf9a5f060e1fbbcbc7beb643b113b10ab)): ?>
<?php $attributes = $__attributesOriginalf9a5f060e1fbbcbc7beb643b113b10ab; ?>
<?php unset($__attributesOriginalf9a5f060e1fbbcbc7beb643b113b10ab); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf9a5f060e1fbbcbc7beb643b113b10ab)): ?>
<?php $component = $__componentOriginalf9a5f060e1fbbcbc7beb643b113b10ab; ?>
<?php unset($__componentOriginalf9a5f060e1fbbcbc7beb643b113b10ab); ?>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\richa\Desktop\proyecto-practicas\laravel\resources\views/edit.blade.php ENDPATH**/ ?>