@extends('layouts.app')
@section('content')
  <profile v-slot:default="customProps">
    <profile-picture-uploader @loadend="customProps.upload" :message="customProps.upload()"/>
  </profile>
@endsection