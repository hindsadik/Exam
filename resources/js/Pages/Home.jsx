import { Link } from '@inertiajs/react'
import React from 'react'
import 'bootstrap/dist/css/bootstrap.min.css';
import { Button, Table } from 'react-bootstrap'
import '../../css/app.css'

export default function Home() {
  return (
    <>
    <div className='col-md-8 m-auto mt-4 boutton'>

        <Button  variant="outline-primary"><Link href="{{ route('posts.create') }}">Ajouter un poste</Link> </Button>
    </div>
       <Table striped bordered hover className='tabel col-md-8 '>
      <thead>
        <tr>
          <th>#id</th>
          <th>Title</th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody>
        
        <tr>
          <td>2</td>
          <td>Jacob</td>
          <td>Thornton</td>
        </tr>
        
      </tbody>
    </Table>













        
       
    </>
  )
}
