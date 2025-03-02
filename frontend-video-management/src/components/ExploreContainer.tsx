import React, { useEffect, useState } from 'react';
import { IonModal, IonButton, IonContent, IonHeader, IonToolbar, IonTitle, IonText, IonIcon, IonInput } from '@ionic/react';
import { destroy, insert, retrieve, update } from '../api/videos';

import { toast } from "react-toastify";
import $ from "jquery";

interface ContainerProps { }

interface Video {
  id: string;
  title: string;
  description: string;
  date_uploaded: string;
  url: string;
  thumbnail: string;
}

const ExploreContainer: React.FC<ContainerProps> = () => {
  const [rows, setRows] = useState<Video[]>([]);
  const [addDialog, setAddDialog] = useState<true | false>(false);
  const [deleteDialog, setDeleteDialog] = useState<any | null>(null);
  const [editDialog, setEditDialog] = useState<any | null>(null);
  const [selectedVideo, setSelectedVideo] = useState<Video | null>(null);

  const getVideos = () => {
    retrieve().then((res) => {

      if (res?.ok) {
        setRows(res.data);
      }
    });
  };

  const deleteVideo = (video: Video) => {
    destroy({ id: video.id, title: video.title }).then((res) => {

      if (res?.ok) {
        setDeleteDialog(null);
        toast.success(res.message ?? "Deleted Sucessfully!");
        getVideos();
        setSelectedVideo(null);
      }else{
        toast.error(res.message ?? "Something went wrong!");
      }
    })
  }

  const updateVideo = () => {
    const body = {
      id: editDialog.id,
      title: $('#editTitle').val(),
      description: $('#editDescription').val(),
      date_uploaded: $('#editDateUploaded').val(),
      url: $('#editUrl').val(),
      thumbnail: $('#editThumbnail').val(),
    };
    update(body).then((res) => {
 
      if (res?.ok) {
        setEditDialog(null);
        toast.success(res.message ?? "Updated Sucessfully!");
        getVideos();
        setSelectedVideo(null);
      }else{
        toast.error(res.message ?? "Something went wrong!");
      }
    })
  }

  const addVideo = () => {
    const body = {
      title: $('#title').val(),
      description: $('#description').val(),
      date_uploaded: $('#date_uploaded').val(),
      url: $('#url').val(),
      thumbnail: $('#thumbnail').val(),
    };
    insert(body).then((res) => {
      
      if (res?.ok) {
        setAddDialog(false);
        toast.success(res.message ?? "Added Sucessfully!");
        getVideos();
        setSelectedVideo(null);
      }else{
        toast.error(res.message ?? "Something went wrong!");
      }
    })
  }


  useEffect(() => {
    getVideos();
  }, []);


  const openModal = (e: any) => {
    setSelectedVideo(e);

  };

  const deleteModal = (e: any) => {
    setDeleteDialog(e);
  };
  const updateModal = (e: any) => {
    setEditDialog(e);
  };


  return (
    <div className="flex justify-center flex-col p-6 gap-2">
      {rows.map((item) => (
        <div
          key={item.id}
          className="w-[800px] border-2 p-2 block m-auto rounded-lg"
          id="container-box"
        >
          <h1>Title: {item.title}</h1>
          <h2 className="text-sm">{item.date_uploaded.slice(0, 10)}</h2>
          <p className="text-gray-600">{item.description}</p>

          <img
            src={item.thumbnail}
            alt={item.title}
            className="w-[100%] h-[400px] object-cover"
            title="Click me to open modal"
            onClick={() => openModal(item)}
          />
        </div>
      ))}

      {/* Ionic Modal */}ditDescription
      <IonModal isOpen={!!selectedVideo} >
        <IonHeader>
          <IonTitle className='p-2'>
            {selectedVideo?.title
              ? `Title: ${selectedVideo.title.charAt(0).toUpperCase()}${selectedVideo.title.slice(1)}`
              : 'No Title Available'}
          </IonTitle>

        </IonHeader>
        <IonContent>
          <div className="p-4">

            <img
              src={selectedVideo?.thumbnail}
              alt={selectedVideo?.title}
              className="w-full h-[300px] object-cover"
            />
            <div className="mt-4 flex flex-col gap-4">
            <IonButton color="tertiary" href={selectedVideo?.url} target='_blank'>Watch this video</IonButton>
              <IonButton color="warning" onClick={() => updateModal(selectedVideo)}>Edit</IonButton>
              <IonButton color="danger" onClick={() => deleteModal(selectedVideo)}>Delete</IonButton>
              <IonButton color="primary" onClick={() => setSelectedVideo(null)}>Cancel</IonButton>
            </div>
          </div>
        </IonContent>
      </IonModal>
              {/* delete modal */}
      <IonModal isOpen={!!deleteDialog}>
        <IonHeader className='p-2'>Delete this video?</IonHeader>

        <IonContent>
          <div className='p-4'>
            <h1>Are you sure you want to delete this video?</h1>
            <div className='flex items-center justify-end'>
              <IonButton color="danger" className='mr-2' onClick={() => deleteVideo(deleteDialog)}>Delete</IonButton>
              <IonButton onClick={() => setDeleteDialog(null)}>Cancel</IonButton>
            </div>
            <img src="https://thumbs.dreamstime.com/b/sad-emoticon-18589362.jpg" alt="sad icon" className='h-100' />
          </div>
        </IonContent>
      </IonModal>
      <IonModal isOpen={!!editDialog}>
        <IonHeader className='p-2'>Edit this video?</IonHeader>

        <IonContent>
          <div className='p-4'>
            <h1>What do you want to change?</h1>
            <div className='border-2 p-2'>
              <IonInput id="editTitle" placeholder='title' value={editDialog?.title} />
            </div>
            <div className='border-2 p-2 mt-2'>
              <IonInput id="editDescription" placeholder='description' value={editDialog?.description} />
            </div>
            <div className='border-2 p-2 mt-2'>
              <IonInput id="editDateUploaded" placeholder='date uploaded' value={editDialog?.date_uploaded} />
            </div>
            <div className='border-2 p-2 mt-2'>
              <IonInput id="editUrl" placeholder='url' value={editDialog?.url} />
            </div>
            <div className='border-2 p-2 mt-2'>
              <IonInput id="editThumbnail" placeholder='thumbnail' value={editDialog?.thumbnail} />
            </div>
            <div className='flex items-center justify-end mt-2'>
              <IonButton color="warning" className='mr-2' onClick={updateVideo}>Edit</IonButton>
              <IonButton onClick={() => setEditDialog(null)}>Cancel</IonButton>
            </div>
          </div>
        </IonContent>


      </IonModal>

      {/* Bottom fixed buttons */}
      <div className="bg-blue-600 text-white fixed bottom-4 left-4 p-3 https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvxn4DBAtsHptHHxSJvCI6VZB-C342Z8cruQ&srounded-lg">
        <IonButton onClick={()=>setAddDialog(true)}>+</IonButton>
      </div>
      
      <div className="bg-green-600 text-white fixed bottom-4 right-7 p-3 rounded-lg">
        <IonButton onClick={getVideos} color="success">⟳</IonButton>
      </div>
              {/* add modal */}
      <IonModal isOpen={!!addDialog}>
        <IonHeader className='p-2'>Add this video?</IonHeader>

        <IonContent>
          <div className='p-4'>
            <h1>Add new video</h1>
            <div className='border-2 p-2'>
              <IonInput id="title" placeholder='title' />
            </div>
            <div className='border-2 p-2 mt-2'>
              <IonInput id="description" placeholder='description'  />
            </div>
            <div className='border-2 p-2 mt-2'>
              <IonInput id="date_uploaded" placeholder='date uploaded'  />
            </div>
            <div className='border-2 p-2 mt-2'>
              <IonInput id="url" placeholder='url' />
            </div>
            <div className='border-2 p-2 mt-2'>
              <IonInput id="thumbnail" placeholder='thumbnail' />
            </div>
            <div className='flex items-center justify-end mt-2 text-white'>
              <IonButton color="success" className='mr-2' onClick={addVideo}>Add</IonButton>
              <IonButton onClick={() => setAddDialog(false)}>Cancel</IonButton>
            </div>
          </div>
        </IonContent>


      </IonModal>

    </div>
  );
};

export default ExploreContainer;
