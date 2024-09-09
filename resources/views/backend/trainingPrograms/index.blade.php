@extends('backend.layouts.app')

@section('content')
    <div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
        <div class="container mx-auto">
            <div class="card adaptable-card">
                <div class="card-body">
                    <div class="lg:flex items-center justify-between mb-4">
                        <h3 class="mb-4 lg:mb-0">Products</h3>
                    </div>
                    <div class="overflow-x-auto">
                        <table id="product-list-data-table" class="table-default table-hover data-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="flex items-center">
                                            <span class="avatar avatar-rounded avatar-md">
                                                <img class="avatar-img avatar-rounded" src="img/products/product-1.jpg" loading="lazy">
                                            </span>
                                            <span class="ml-2 rtl:mr-2 font-semibold">Luminaire Giotto Headphones</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="capitalize">devices</span>
                                    </td>
                                    <td>46</td>
                                    <td>
                                        <div class="flex items-center gap-2">
                                            <span class="badge-dot bg-emerald-500"></span>
                                            <span class="capitalize font-semibold text-emerald-500">In Stock</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span>$252</span>
                                    </td>
                                    <td>
                                        <div class="flex justify-end text-lg">
                                            <span class="cursor-pointer p-2 hover:text-indigo-600">
                                                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                                                </svg>
                                            </span>
                                            <span class="cursor-pointer p-2 hover:text-red-500">
                                                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                            </span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
