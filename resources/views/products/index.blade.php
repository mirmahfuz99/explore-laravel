scope="col">Product name</th>
      <th scope="col">Category Name</th>

    </tr>
  </thead>
  <tbody>
             @foreach ($products as $product)
               <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $product->prodname }}</td>
                  <td>{{ $product->category->catname }}</td>

                </tr>
            @endforeach

  </tbody>

</table>
