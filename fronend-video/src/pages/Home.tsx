import { IonContent, IonHeader, IonPage, IonTitle, IonToolbar } from '@ionic/react';
import ExploreContainer from '../components/ExploreContainer';
import './Home.css';
import { ToastContainer,toast } from 'react-toastify';

const Home: React.FC = () => {
  return (
    <IonPage>
      <ToastContainer />
      <IonHeader>
        <IonToolbar>
          <IonTitle className='p-2'>Youtube</IonTitle>
        </IonToolbar>
      </IonHeader>
      <IonContent fullscreen>
        <IonHeader collapse="condense">
          <IonToolbar>
            <IonTitle size="large">Youtube</IonTitle>
          </IonToolbar>
        </IonHeader>
        <ExploreContainer />
      </IonContent>
    </IonPage>
  );
};

export default Home;
