<x-mail::message>
# Nouvelle demande de contact

Une nouvelle demande de contact a été fait pour le bien <a href="{{ route('products.show',['slug'=>$product->slug,'product' =>$product]) }}">{{ $product->title }}</a>

- Prénom : {{ $data['firstname'] }}
- Nom : {{ $data['lastname'] }}
- Téléphone : {{ $data['phone'] }}
- Email : {{ $data['email'] }}


- Message :**<br/>
 {{ $data['message'] }}

</x-mail::message>


