<template>
    <div>
        <h4 class="flex justify-between border-0 rounded p-3 mb-2 text-base text-white-50% bg-logo hover:bg-90-half" @click.prevent="toggle">
            {{ header }}
            <svg class="text-xs mt-1" v-show="!is_expanded" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 01.753 1.659l-4.796 5.48a1 1 0 01-1.506 0z"/>
            </svg>
            <svg class="text-xs mt-1" v-show="is_expanded" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.247 4.86l-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 00.753-1.659l-4.796-5.48a1 1 0 00-1.506 0z"/>
            </svg>
        </h4>

        <transition-group tag="ul" class="list-reset" :class="{'mb-6': last }" v-show="is_expanded">
            <slot></slot>
        </transition-group>
    </div>
</template>

<script>
    export default {
        props: {
            header: String,
            last: Boolean,
            expanded: Boolean
        },
        data(){
            return {
                is_expanded : false,
            }
        },
        created(){
            this.is_expanded = this.expanded;
        },
        methods: {
            toggle() {
                this.is_expanded = !this.is_expanded
            }
        }
    }
</script>

<style scoped>
    h4{
        cursor:pointer;
    }
</style>