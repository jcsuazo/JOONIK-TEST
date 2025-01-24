// src/components/LocationList.test.tsx
import { render, screen, waitFor } from "@testing-library/react";
import LocationList from "./LocationList";

test("renders locations from the API", async () => {
  render(<LocationList />);

  // Wait for the component to load the data
  // await waitFor(() => screen.getByText("Location 1"));
  const location1 = await screen.findByText("Location 1");
  expect(location1).toBeInTheDocument();

  // expect(screen.getByText("Location 1")).toBeInTheDocument();
  // expect(screen.getByText("Location 2")).toBeInTheDocument();
  // expect(screen.getByText("Location 3")).toBeInTheDocument();
});
