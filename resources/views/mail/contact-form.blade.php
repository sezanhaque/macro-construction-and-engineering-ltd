<x-mail::message>
# Contact Form Mail

A client named **{{$name}}** has emailed you.

# Email Body:
> {{$message}}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
