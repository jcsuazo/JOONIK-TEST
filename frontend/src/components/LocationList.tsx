import React, { useEffect, useState } from "react";
import axios from "axios";
import { Card, CardContent, Typography } from "@mui/material";
import Grid from "@mui/material/Grid2";
// Define the interface for a Location
interface Location {
  code: number;
  name: string;
  image: string;
  creationDate: string;
}

const LocationList: React.FC = () => {
  const [locations, setLocations] = useState<Location[]>([]);

  // Fetch locations from the backend
  useEffect(() => {
    const fetchLocations = async () => {
      try {
        const response = await axios.get(
          "http://localhost:8000/api/locations",
          {
            headers: {
              "X-API-KEY": process.env.REACT_APP_API_KEY,
              Accept: "application/json",
            },
          }
        );
        setLocations(response.data);
      } catch (error) {
        console.error("Error fetching locations:", error);
      }
    };

    fetchLocations();
  }, []);

  return (
    <Grid container spacing={3}>
      {locations.map((location) => (
        <Grid size={{ xs: 12, sm: 6, md: 4 }} key={location.code}>
          <Card>
            <img
              src={location.image}
              alt={location.name}
              style={{ width: "100%" }}
            />
            <CardContent>
              <Typography variant="h6">{location.name}</Typography>
              <Typography variant="body1">Code: {location.code}</Typography>
              <Typography variant="body2">
                Creation Date: {location.creationDate}
              </Typography>
            </CardContent>
          </Card>
        </Grid>
      ))}
    </Grid>
  );
};

export default LocationList;
