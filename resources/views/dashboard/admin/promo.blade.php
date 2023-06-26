@extends('layout/main')
@section('title', 'Промо-материалы')
@section('breadcrumbs')
<div class="d-flex gap-2 mb-2">
    <a href="/dashboard" class="text-muted">Панель</a>   
    <span class="text-secondary">/</span>
    <span class="text-muted">Промо-материалы</span>    
</div>
@endsection
@section('content')  
<h6 class="text-muted">Список каталогов партнёров</h6>
<div class="row">
    <div class="col">
        <template v-if="edit">
            <div class="card border-0 shadow-sm mb-3">
                <form class="card-body" @submit.prevent="onEditSubmit">
                    <div class="d-flex align-items-center justify-content-between">
                        <h2></h2>
                        <button class="btn" v-on:click="edit = !edit">
                            <x-icon-close />
                        </button>                        
                    </div>
                    <div class="d-grid gap-2">
                        <input type="file" name="banner" />
                        <input type="text" name="header" :value="array.header" class="form-control" placeholder="Заголовок" />   
                        <input type="text" name="brand" :value="array.brand" class="form-control" placeholder="Бренд" />   
                        <input type="text" name="uuid" :value="array.uuid" class="form-control" placeholder="uuid" />   
                        <textarea name="description" class="form-control" placeholder="Описание"></textarea> 
                        <input type="file" name="pdf" />  
                    </div>
                    <hr />
                    <button class="btn btn-dark px-4 icon-link">
                        <x-icon-check /> Сохранить
                    </button>
                </form>
            </div>
        </template>
        <template v-else>
            <div class="card border-0 shadow-sm mb-3">
                <div class="card-body">
                    <form class="d-flex gap-2" @submit.prevent="onSubmit">
                        <input 
                            type="text" 
                            placeholder="Название бренда" 
                            v-model="brand" 
                            class="form-control" 
                            :class="[isError.error ? 'text-danger border-danger' : '']"
                        />
                        <input type="text" placeholder="Заголовок..." v-model="header" class="form-control" />
                        <div class="d-grid w-50">
                            <button class="btn btn-dark px-4 icon-link" v-if="loading === true">
                                <x-icon-add /> Cоздать
                            </button>
                            <button class="btn btn-dark px-4" v-else>Запись...</button>                    
                        </div>
                    </form>
                    <small class="text-danger" v-if="isError.error">@{{isError.error}}</small>
                </div>
                {{-- <pre v-html="JSON.parse(JSON.stringify(isError, null, 4))"></pre> --}}
            </div>
            {{-- <pre v-html="JSON.stringify(result, null, 4)"></pre> --}}
            <div v-if="!loading">Загрузка материалов...</div>
            <template v-if="result.length !== 0">
                <div class="card border-0 shadow-sm mb-3" v-for="(item, id) in result" :key="item.id">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <a :href="`/dashboard/admin/promo/${item.brand}`" class="link-body-emphasis text-body-emphasis px-3 fw-bold text-truncate w-50">
                                @{{item.header}}
                            </a>
                            <div class="d-flex align-items-center gap-2">
                                <div class="btn btn-sm fst-italic text-body-secondary">@{{new Date(item.created_at).toLocaleString()}}</div>
                                <button class="btn bg-dark-subtle material-symbols-outlined" v-on:click="viewPromo(item.uuid)">edit_note</button>
                                <button class="btn text-danger bg-danger-subtle" v-on:click="deletePromo(item.uuid)">
                                    <x-icon-delete size="25px" />
                                </button> 
                            </div>
                        </div>
                    </div>
                </div>
            </template>             
		</template>
    </div>
</div>
@endsection