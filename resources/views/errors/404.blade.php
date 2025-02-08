@extends('errors::minimal')

@section('title', __('Not Found'))
@section('image', url('/') . '/assets/images/backgrounds/errorimg.svg')
@section('code', '404')
@section('message', __('Not Found'))
