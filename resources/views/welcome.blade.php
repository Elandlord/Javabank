<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' type='text/css'>
        <title>Laravel</title>
    </head>
    <body>

        <div class='col-lg-6'>
            <h3> Alle accounts </h3>

              <table class='table table-striped'>
                    <tr>
                        <th>Voornaam</th>
                        <th>Achternaam</th>
                        <th> IBAN </th>
                        <th> Geld op rekening </th>
                    </tr>
            @foreach($data['accounts'] as $account)
             
                    <tr>
                         <td>{{ $account->first_name }} </td>
                          <td>{{ $account->last_name }} </td>
                           <td>{{ $account->account_number }} </td>
                           <td>&euro;{{ $account->balance }} </td>
                    </tr>
              
            @endforeach
             </table>
        </div>
         <div class='col-lg-6'>
            <h3> Alle transacties </h3>
            <table class='table table-striped'>
                    <tr>
                        <th>Bedrag</th>
                        <th>Verzender</th>
                        <th>Ontvanger</th>
                    </tr>
        @foreach($data['transactions'] as $transaction)
                <tr>
                    <td>&euro;{{ $transaction->amount }}</td>
                    <td>{{ $transaction->account_number_sender }}</td>
                    <td>{{ $transaction->account_number_receiver }}</td>
                </tr> 
        @endforeach
            </table>
        </div>
    </body>
</html>
