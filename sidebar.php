<aside>
    <h6 class="w3-text-theme">Fecha:</h6>
    <p><?php echo get_the_date('F j, Y'); ?></p>
    <h6 class="w3-text-theme">Categoría:</h6>
    <p><?php the_category(', '); ?></p>
    <h6 class="w3-text-theme">Cliente:</h6>
    <p><?php the_field('cliente'); ?></p>
    <h6 class="w3-text-theme">Descripción:</h6>
    <p><?php the_field('descripcion'); ?></p>
</aside>