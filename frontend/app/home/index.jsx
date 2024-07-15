import {
  Text,
  View,
  FlatList,
  Pressable,
  Platform,
  StyleSheet,
  Image,
  Modal,
  Linking,
  RefreshControl,
} from "react-native";
import { MainLayout } from "@/components/CustomComponents";
import { useEffect, useState } from "react";
import { useSelector } from "react-redux";
import { router } from "expo-router";
import { getVideos, deleteVideo, updateVideo, addVideo } from "@/api/vids";
import { FontAwesome } from "@expo/vector-icons";
import { Button, FAB, TextInput } from "react-native-paper";
import Toast from "react-native-toast-message";

export default function Index() {
  const user = useSelector((state) => state.auth.user) ?? null;
  const [videos, setVideos] = useState([]);
  const [showOptions, setShowOptions] = useState(false);
  const [editDialog, setEditDialog] = useState(false);
  const [addDialog, setAddDialog] = useState(false);
  const [showConfirm, setShowConfirm] = useState(false);
  const [selectedVid, setSelectedVid] = useState({});
  const [refreshing, setRefreshing] = useState(false);
  const [title, setTitle] = useState("");
  const [description, setDescription] = useState("");
  const [dateuploaded, setDateUploaded] = useState("");
  const [thumbnail, setThumbnail] = useState("");
  const [url, setUrl] = useState("");

  useEffect(() => {
    getVideos().then((res) => {
      setVideos(res.data);
      console.log(res.data);
    });
  }, []);

  const handleVideoItemPress = (item) => {
    setSelectedVid(item);
    setShowOptions(true);
  };

  const handleDeleteVideo = () => {
    deleteVideo({ id: selectedVid.id, title: selectedVid.title })
      .then((res) => {
        console.log(res);
        if (res?.ok) {
          onRefresh();
          Toast.show({
            type: "success",
            text1: res.message ?? "Video Deleted successfully!",
          });
        } else {
          Toast.show({
            type: "error",
            text1: res.error ?? "Something went wrong",
          });
        }
      })
      .catch((e) => {
        console.log(e.message);
      })
      .finally(() => {
        setShowConfirm(false);
      });
  };
  const handleEditVideo = () => {
    updateVideo({
      id: selectedVid.id,
      title,
      description,
      date_uploaded: dateuploaded,
      thumbnail,
      url,
    })
      .then((res) => {
        console.log(res);
        if (res?.ok) {
          onRefresh();
          Toast.show({
            type: "success",
            text1: res.message ?? "Video updated successfully!",
          });

          setTitle("");
          setDescription("");
          setDateUploaded("");
          setThumbnail("");
          setUrl("");
        } else {
          Toast.show({
            type: "error",
            text1: res.error ?? "Something went wrong",
          });
        }
      })
      .catch((e) => {
        console.log(e.message);
      })
      .finally(() => {
        setEditDialog(false);
      });
  };

  const onRefresh = () => {
    setRefreshing(true);
    getVideos()
      .then((res) => {
        setVideos(res.data);
        setRefreshing(false);
      })
      .catch(() => {
        setRefreshing(false);
      });
  };
  const goToAddPage = () => {
    addVideo({
      title: title,
      description: description,
      date_uploaded: dateuploaded,
      thumbnail: thumbnail,
      url: url,
    })
      .then((res) => {
        if (res?.ok) {
          onRefresh();
          Toast.show({
            type: "success",
            text1: res.message ?? "Video updated successfully!",
          });

          setTitle("");
          setDescription("");
          setDateUploaded("");
          setThumbnail("");
          setUrl("");
        } else {
          Toast.show({
            type: "error",
            text1: res.error ?? "Something went wrong",
          });
        }
      })
      .catch((e) => {
        console.log(e.message);
      })
      .finally(() => {
        setAddDialog(false);
      });
  };

  return (
    <MainLayout>
      {/* options modal */}
      <Modal animationType="fade" transparent={true} visible={showOptions}>
        <View
          style={{
            flex: 1,
            alignItems: "center",
            justifyContent: "center",
            backgroundColor: "rgba(0,0,0,0.5)",
          }}
        >
          <View style={styles.modalView}>
            {/* title */}
            <Text
              style={{
                marginBottom: 30,
                textAlign: "center",
                fontWeight: "bold",
                fontSize: 18,
              }}
            >
              What do you want to do with video {selectedVid.title}
            </Text>
            <Button
              rippleColor="#aaa"
              icon="play"
              textColor="#fff"
              style={{
                width: "90%",
                backgroundColor: "#007bff",
                marginBottom: 20,
              }}
              onPress={() => {
                Linking.openURL(selectedVid.url);
              }}
            >
              <Text
                style={{
                  fontSize: 16,
                  padding: 3,
                  textAlign: "center",
                  fontWeight: "bold",
                }}
              >
                View Video
              </Text>
            </Button>
            <Button
              rippleColor="#aaa"
              icon="movie-edit"
              textColor="#fff"
              style={{
                width: "90%",
                backgroundColor: "#007bff",
                marginBottom: 20,
              }}
              onPress={() => {}}
            >
              <Text
                style={{
                  fontSize: 16,
                  padding: 3,
                  textAlign: "center",
                  fontWeight: "bold",
                }}
                onPress={() => {
                  setShowOptions(false);
                  setEditDialog(true);
                }}
              >
                Update Video
              </Text>
            </Button>
            <Button
              rippleColor="#aaa"
              icon="delete"
              textColor="#fff"
              style={{
                width: "90%",
                backgroundColor: "#007bff",
                marginBottom: 20,
              }}
              onPress={() => {
                setShowOptions(false);
                setShowConfirm(true);
              }}
            >
              <Text
                style={{
                  fontSize: 16,
                  padding: 3,
                  textAlign: "center",
                  fontWeight: "bold",
                }}
              >
                Delete Video
              </Text>
            </Button>
            <Button
              rippleColor="#aaa"
              icon="close"
              textColor="#fff"
              style={{
                width: "90%",
                backgroundColor: "#a10002",
              }}
              onPress={() => setShowOptions(false)}
            >
              <Text
                style={{
                  fontSize: 16,
                  padding: 3,
                  textAlign: "center",
                  fontWeight: "bold",
                }}
              >
                Close
              </Text>
            </Button>
          </View>
        </View>
      </Modal>
      {/* confirm/ delete modal */}
      <Modal animationType="fade" transparent={true} visible={showConfirm}>
        <View
          style={{
            flex: 1,
            alignItems: "center",
            justifyContent: "center",
            backgroundColor: "rgba(0,0,0,0.5)",
          }}
        >
          <View style={styles.modalView}>
            {/* title */}
            <Text
              style={{
                marginBottom: 30,
                textAlign: "center",
                fontWeight: "bold",
                fontSize: 18,
              }}
            >
              Do you want to do delete video {selectedVid.title}?
            </Text>
            <View
              style={
                Platform.OS == "web"
                  ? { flexDirection: "row-reverse", justifyContent: "center" }
                  : { justifyContent: "center" }
              }
            >
              <Button
                rippleColor="#aaa"
                icon="check"
                textColor="#fff"
                style={{
                  width: "90%",
                  backgroundColor: "#28a745",
                  marginLeft: 5,
                  marginRight: 5,
                }}
                onPress={() => handleDeleteVideo()}
              >
                <Text
                  style={{
                    fontSize: 16,
                    padding: 3,
                    textAlign: "center",
                    fontWeight: "bold",
                  }}
                >
                  Yes
                </Text>
              </Button>
              <Button
                rippleColor="#aaa"
                icon="close"
                textColor="#fff"
                style={{
                  width: "90%",
                  backgroundColor: "#a10002",
                  marginLeft: 5,
                  marginRight: 5,
                }}
                onPress={() => {
                  setShowOptions(true);
                  setShowConfirm(false);
                }}
              >
                <Text
                  style={{
                    fontSize: 16,
                    textAlign: "center",
                    fontWeight: "bold",
                  }}
                >
                  No
                </Text>
              </Button>
            </View>
          </View>
        </View>
      </Modal>
      {/* Edit modal */}
      <Modal animationType="fade" transparent={true} visible={editDialog}>
        <View
          style={{
            flex: 1,
            alignItems: "center",
            justifyContent: "center",
            backgroundColor: "rgba(0,0,0,0.5)",
          }}
        >
          <View
            style={{
              padding: 20,
              backgroundColor: "#fff",
              borderRadius: 10,
              width: "80%",
            }}
          >
            <Text
              style={{
                marginBottom: 20,
                fontSize: 18,
                fontWeight: "bold",
                textAlign: "center",
              }}
            >
              Edit Video
            </Text>
            <TextInput
              label="Title"
              mode="outlined"
              style={{ marginBottom: 10 }}
              value={title}
              onChangeText={setTitle}
              id="title"
            />
            <TextInput
              label="Description"
              mode="outlined"
              style={{ marginBottom: 10 }}
              value={description}
              onChangeText={setDescription}
              id="description"
            />
            <TextInput
              label="Date Uploaded"
              mode="outlined"
              style={{ marginBottom: 10 }}
              value={dateuploaded}
              onChangeText={setDateUploaded}
              id="dateuploaded"
            />
            <TextInput
              label="Thumbnail"
              mode="outlined"
              style={{ marginBottom: 10 }}
              value={thumbnail}
              onChangeText={setThumbnail}
              id="thumbnail"
            />
            <TextInput
              label="URL"
              mode="outlined"
              style={{ marginBottom: 10 }}
              value={url}
              onChangeText={setUrl}
              id="url"
            />
            <Button
              onPress={handleEditVideo}
              mode="contained"
              style={{ marginTop: 20, backgroundColor: "#007bff" }}
            >
              Save Changes
            </Button>
            <Button
              onPress={() => {
                setEditDialog(false);
                setTitle("");
                setDescription("");
                setDateUploaded("");
                setThumbnail("");
                setUrl("");
              }}
              mode="outlined"
              style={{ marginTop: 10, borderColor: "#007bff" }}
            >
              Cancel
            </Button>
          </View>
        </View>
      </Modal>
      {/* Add Modal */}
      <Modal animationType="fade" transparent={true} visible={addDialog}>
        <View
          style={{
            flex: 1,
            alignItems: "center",
            justifyContent: "center",
            backgroundColor: "rgba(0,0,0,0.5)",
          }}
        >
          <View
            style={{
              padding: 20,
              backgroundColor: "#fff",
              borderRadius: 10,
              width: "80%",
            }}
          >
            <Text
              style={{
                marginBottom: 20,
                fontSize: 18,
                fontWeight: "bold",
                textAlign: "center",
              }}
            >
              Add Form Video
            </Text>
            <TextInput
              label="Title"
              mode="outlined"
              style={{ marginBottom: 10 }}
              value={title}
              onChangeText={setTitle}
              id="title"
            />
            <TextInput
              label="Description"
              mode="outlined"
              style={{ marginBottom: 10 }}
              value={description}
              onChangeText={setDescription}
              id="description"
            />
            <TextInput
              label="Date Uploaded"
              mode="outlined"
              style={{ marginBottom: 10 }}
              value={dateuploaded}
              onChangeText={setDateUploaded}
              id="dateuploaded"
            />
            <TextInput
              label="Thumbnail"
              mode="outlined"
              style={{ marginBottom: 10 }}
              value={thumbnail}
              onChangeText={setThumbnail}
              id="thumbnail"
            />
            <TextInput
              label="URL"
              mode="outlined"
              style={{ marginBottom: 10 }}
              value={url}
              onChangeText={setUrl}
              id="url"
            />
            <Button
              onPress={goToAddPage}
              mode="contained"
              style={{ marginTop: 20, backgroundColor: "#007bff" }}
            >
              Save Changes
            </Button>
            <Button
              onPress={() => {
                setAddDialog(false);
                setTitle("");
                setDescription("");
                setDateUploaded("");
                setThumbnail("");
                setUrl("");
              }}
              mode="outlined"
              style={{ marginTop: 10, borderColor: "#007bff" }}
            >
              Cancel
            </Button>
          </View>
        </View>
      </Modal>
      {/* FlatList = RecyclerView */}
      <FlatList
        data={videos}
        refreshControl={
          <RefreshControl refreshing={refreshing} onRefresh={onRefresh} />
        }
        renderItem={({ item }) => (
          <Pressable
            android_ripple={{ color: "#eee" }}
            style={
              Platform.OS == "android"
                ? styles.elevate
                : ({ pressed }) => [
                    styles.elevate,
                    { backgroundColor: pressed ? "#aaa" : null },
                  ]
            }
            onPress={() => handleVideoItemPress(item)}
          >
            <Image
              source={item.thumbnail != "" ? { uri: item.thumbnail } : {}}
              style={{ width: "100%", height: 250, marginBottom: 12 }}
              resizeMode={Platform.OS == "web" ? "contain" : "cover"}
            />

            <Text
              style={{
                fontSize: 24,
                padding: 10,
                color: "#f52",
                fontWeight: "bold",
              }}
            >
              <FontAwesome name="youtube-play" size={24} /> {item.title}
            </Text>
            <Text
              style={{
                fontSize: 16,
                paddingLeft: 10,
                paddingBottom: 10,
                color: "#08f",
                fontWeight: "bold",
              }}
            >
              <FontAwesome name="calendar-o" size={16} />{" "}
              {new Date(item.date_uploaded).toLocaleDateString("en-US", {
                weekday: "long",
                month: "long",
                day: "numeric",
                year: "numeric",
              })}
            </Text>
            <Text style={{ padding: 10 }}>{item.description}</Text>
          </Pressable>
        )}
      />

      {/* FAB short term of Floating action Button lol hHhahahaaah rawr */}
      <FAB
        icon="plus"
        style={{
          position: "absolute",
          margin: 16,
          right: 0,
          bottom: 0,
          backgroundColor: "#28a745",
        }}
        rippleColor="#fff"
        color="#fff"
        mode="elevated"
        onPress={() => {
          setShowOptions(false);
          setAddDialog(true);
        }}
      />

      <FAB
        icon="refresh"
        style={{
          position: "absolute",
          margin: 16,
          left: 0,
          bottom: 0,
          backgroundColor: "#007bff",
        }}
        rippleColor="#fff"
        color="#fff"
        mode="elevated"
        onPress={() => onRefresh()}
      />
    </MainLayout>
  );
}

const styles = StyleSheet.create({
  elevate: {
    flex: 1,
    margin: 12,
    elevation: 2,
    shadowColor: "#000",
    shadowOffset: { width: 3, height: 3 },
    shadowOpacity: 0.5,
    // shadowRadius: 2,
    borderBlockColor: "#000",
  },
  modalView: {
    width: "90%",
    minHeight: "10%",
    margin: 20,
    backgroundColor: "#fff",
    borderRadius: 20,
    padding: 35,
    alignItems: "center",
    shadowColor: "#000",
    shadowOffset: {
      width: 0,
      height: 2,
    },
    shadowOpacity: 0.25,
    shadowRadius: 4,
    elevation: 5,
  },
});
