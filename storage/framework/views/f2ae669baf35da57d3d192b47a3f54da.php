<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'type',
    'name',
    'value'
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'type',
    'name',
    'value'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<input type="<?php echo e($type); ?>" name="<?php echo e($name); ?>" id="<?php echo e($name); ?>" placeholder="<?php echo e(ucfirst($name)); ?>..." value="<?php echo e($value); ?>"
    class="px-4 py-1 border rounded-lg mb-4 mt-2"><?php /**PATH C:\Users\richa\Desktop\proyecto-practicas\laravel\resources\views/components/edit-input.blade.php ENDPATH**/ ?>