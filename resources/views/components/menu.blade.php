<div class="accordion" id="content">
    <li class="list-group-item disabled bg-primary text-secondary fs-6 mt-3 px-3 py-2" :class="{'text-center' : !isOpen}">
        <template v-if="isOpen">{{$header}}</template>
        <template v-else>-</template>
    </li>
    @foreach($list as $i)
        @if($i['list'])
        <div class="accordion-item border-0">
            <h2 class="accordion-header border-top border-secondary" id="heading{{ $loop->iteration}}" v-on:click="toggleSubMenu">
                <a 
                    class="d-flex gap-2 py-2 px-3 bg-primary text-white tooltips shadow-none rounded-0 text-decoration-none cp" 
                    :class="[isOpen ? 'accordion-button' : 'justify-content-center']" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#collapse{{$loop->iteration}}"
                >
                    <i class="material-symbols-outlined text-warning">{{ $i['icon'] }}</i>
                    <span v-if="isOpen">{{ $i['name'] }}</span>
                    <span v-else class="tooltiptext">{{ $i['name'] }}</span> 
                </a>
            </h2>
            <div 
                id="collapse{{$loop->iteration}}" 
                class="accordion-collapse collapse" 
                aria-labelledby="heading{{$loop->iteration}}" 
                data-bs-parent="#content"
            >
                <div class="accordion-body bg-primary pe-0 py-0 border-top border-secondary">
                    <ul id="submenu" class="border-start border-secondary list-group list-group-flush bg-transparent">
                        @foreach($i['list'] as $d)
                            @if($d['name'] !== 'divider')
                                <a href="{{ URL::to('dashboard/' . $d['href']) }}" class="list-group-item bg-primary">
                                    {{$d['name']}}
                                </a>
                            @endif
                        @endforeach 
                    </ul>
                </div>
            </div>
        </div>
        @else
            <a href="{{ URL::to('dashboard/' . $i['slug']) }}"  
                class="d-flex align-items-center text-decoration-none bg-primary text-white tooltips border-top border-secondary"
                :class="[isOpen ? 'justify-content-between' : 'justify-content-center']"
            >
                <span class="d-flex gap-2 px-3 py-2">
                    <i class="material-symbols-outlined text-warning">{{ $i['icon'] }}</i>
                    <span v-if="isOpen">{{ $i['name'] }}</span>   
                    <span v-else class="tooltiptext">{{ $i['name'] }}</span>             
                </span>
                @if($i['count'])
                <span class="badge bg-warning rounded-pill text-dark me-3" :class="[!isOpen ? 'label-menu' : '']">
                    {{ $i['count'] }}
                </span>
                @endif
            </a>
        @endif
    @endforeach    
</div>