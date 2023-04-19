<?php
    if($_SERVER['REQUEST_URI'] === '/dashboard') {
        list($home, $section) = explode('/', $_SERVER['REQUEST_URI']);
        $currenturl = $home.'/'.$section;        
    } else {
        list($home, $section, $info) = explode('/', $_SERVER['REQUEST_URI']);
        $currenturl = $home.'/'.$section.'/'.$info;
    }
?>
<div class="accordion" id="content">
    <li 
        style="font-size:12px"
        class="list-group-item disabled bg-white text-secondary mt-3 px-3 py-2" 
        :class="{'text-center' : !isOpen}"
    >
        <template v-if="isOpen"><?php echo e($header); ?></template>
        <template v-else>-</template>
    </li>
    <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($i['list']): ?>
        <div class="accordion-item border-0">
            <h2 class="accordion-header border-top border-light" id="heading<?php echo e($loop->iteration); ?><?php echo e($id); ?>" v-on:click="toggleSubMenu">
                <a 
                    href="/dashboard/<?php echo e($i['slug']); ?>"
                    class="d-flex gap-2 py-2 px-3 bg-white text-dark tooltips shadow-none rounded-0 text-decoration-none cp border-start border-4 
                    <?php if($currenturl === '/dashboard/'.$i['slug']): ?> border-danger <?php else: ?> border-white <?php endif; ?>" 
                    :class="[isOpen ? 'accordion-button' : 'justify-content-center']" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#collapse<?php echo e($loop->iteration); ?><?php echo e($id); ?>"
                >
                    <i class="material-symbols-outlined text-secondary"><?php echo e($i['icon']); ?></i>
                    <span v-if="isOpen"><?php echo e($i['name']); ?></span>
                    <span v-else class="tooltiptext"><?php echo e($i['name']); ?></span> 
                </a>
            </h2>
            <div 
                id="collapse<?php echo e($loop->iteration); ?><?php echo e($id); ?>" 
                class="accordion-collapse collapse <?php if($currenturl === '/dashboard/'.$i['slug']): ?> show <?php endif; ?>" 
                aria-labelledby="heading<?php echo e($loop->iteration); ?><?php echo e($id); ?>" 
                data-bs-parent="#content"
            >
                <div class="accordion-body bg-light pe-0 py-0 border-end border-white">
                    <ul id="submenu" class="border-start border-muted list-group list-group-flush bg-transparent ms-2">
                        <?php $__currentLoopData = $i['list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($d['name'] !== 'divider'): ?>
                                <a 
                                    href="<?php echo e('/dashboard/'.$d['href']); ?>" 
                                    class="list-group-item bg-light <?php if('/dashboard/'.$d['href'] === $_SERVER['REQUEST_URI']): ?> fw-bold <?php endif; ?>" 
                                    style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;width: 215px"
                                    title="<?php echo e($d['name']); ?>"
                                >
                                    <?php echo e($d['name']); ?>

                                </a>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    </ul>
                </div>
            </div>
        </div>
        <?php else: ?>
        <div class="border-top border-light">
            <a 
                href="<?php echo e('/dashboard/'.$i['slug']); ?>"  
                class="d-flex align-items-center text-decoration-none bg-white text-dark tooltips border-start border-4
                <?php if($_SERVER['REQUEST_URI'] === '/dashboard/'.$i['slug']): ?> border-danger <?php else: ?> border-white <?php endif; ?>"
                :class="[isOpen ? 'justify-content-between' : 'justify-content-center']"
            >
                <span class="d-flex gap-2 px-3 py-2">
                    <i class="material-symbols-outlined text-secondary"><?php echo e($i['icon']); ?></i>
                    <span v-if="isOpen"><?php echo e($i['name']); ?></span>   
                    <span v-else class="tooltiptext"><?php echo e($i['name']); ?></span>             
                </span>
                <?php if($i['count']): ?>
                    <?php if($i['name'] === 'Корзина'): ?>
                        <span class="badge bg-danger rounded-pill me-3" v-if="card.length" :class="[!isOpen ? 'label-menu' : '']">
                            {{card.length}}
                        </span>
                    <?php elseif($i['name'] === 'Предзаказы'): ?>
                        <span class="badge bg-danger rounded-pill me-3" v-if="preorder.length" :class="[!isOpen ? 'label-menu' : '']"> 
                            {{preorder.length}}
                        </span>
                    <?php else: ?>
                    <span class="badge bg-danger rounded-pill me-3" :class="[!isOpen ? 'label-menu' : '']">
                        <?php echo e($i['count']); ?>

                    </span>
                    <?php endif; ?>
                <?php endif; ?>
            </a>            
        </div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
</div><?php /**PATH C:\OpenServer\domains\prospektrans.host\resources\views/components/menu.blade.php ENDPATH**/ ?>