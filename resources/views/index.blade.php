@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-6 col-sm-12 margin-top-large">
                <h1><strong>RANKING</strong></h1>

                <form action="{{ url('/') }}">
                    <div class="input-group input-group-lg margin-top-medium">
                        <input type="text" class="form-control" name="name" placeholder="Busca por nome" aria-describedby="button-addon">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon">Buscar</button>
                        </div>
                    </div>
                </form>

                <table class="table table-dark table-striped margin-top-medium">
                    <thead>
                        <tr>
                            <td><h4>NAME</h4></td>
                            <td><h4 class="text-right">
                                <svg version="1.1" width="30px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 448 448" style="enable-background:new 0 0 448 448;" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M416,256c0-17.68-14.32-32-32-32s-32,14.32-32,32c0,3.6,0.736,7.008,1.824,10.256L224,323.952L94.176,266.256
                                                C95.264,263.008,96,259.6,96,256c0-17.68-14.32-32-32-32s-32,14.32-32,32c-17.68,0-32,14.32-32,32s14.32,32,32,32
                                                c12,0,22.352-6.688,27.824-16.48l105.072,46.704l-41.072,18.256C118.352,358.688,108,352,96,352c-17.68,0-32,14.32-32,32
                                                s14.32,32,32,32c0,17.68,14.32,32,32,32s32-14.32,32-32c0-3.6-0.736-7.008-1.824-10.256L388.192,303.52
                                                C393.648,313.312,404,320,416,320c17.68,0,32-14.32,32-32S433.68,256,416,256z"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M352,352c-12,0-22.352,6.688-27.824,16.48l-21.376-9.504l-59.104,26.272l46.128,20.496C288.736,408.992,288,412.4,288,416
                                                c0,17.68,14.32,32,32,32s32-14.32,32-32c17.68,0,32-14.32,32-32S369.68,352,352,352z"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M224,0C153.312,0,96,57.312,96,128v62.864c0,10.704,5.344,20.704,14.256,26.624L144,240v32h32v-32h32v32h32v-32h32v32h32
                                                v-32l33.744-22.496C346.656,211.568,352,201.568,352,190.88V128C352,57.312,294.688,0,224,0z M160,192c-17.664,0-32-14.336-32-32
                                                c0-17.68,14.336-32,32-32c17.68,0,32,14.32,32,32C192,177.664,177.68,192,160,192z M208,208c0-17.68,7.168-32,16-32
                                                c8.832,0,16,14.32,16,32H208z M288,192c-17.664,0-32-14.336-32-32c0-17.68,14.336-32,32-32c17.68,0,32,14.32,32,32
                                                C320,177.664,305.68,192,288,192z"/>
                                        </g>
                                    </g>
                                </svg>
                                KILLS
                            </h4>
                            </td>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($ranking as $player)
                        <tr>
                            <td>{{ $player->name }}</td>
                            <td class="text-right">{{ count($player->kills) - count($player->deads) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
