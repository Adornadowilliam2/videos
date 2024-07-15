import { Stack } from "expo-router";
import { Provider } from "react-redux";
import { store } from "@/redux/store";
import Toast from "react-native-toast-message";
// this is the App.js of React Native
// if we create another _layout.tsx/.jsx the newly created _layout file is not the new App.js
//if navigating back to this layout by using address bar, everything resets

//we still develop mobile apps here instead of website
//use ReactJS for developing websites
export default function RootLayout() {
  return (
    <Provider store={store}>
      <Stack>
        <Stack.Screen
          name="index"
          options={{
            title: "Landing Page",
            headerTitleAlign: "center",
            // headerTintColor: '#09f',
            // headerShown: false
          }}
        />
      </Stack>
      <Toast />
    </Provider>
  );
}
