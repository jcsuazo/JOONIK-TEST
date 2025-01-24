import { rest } from 'msw'; // Import the rest method from msw
import { Location } from '../types';

export const handlers = [
  rest.get('/api/locations', (req, res, ctx) => {
    // Here, we define a mock response
    const mockLocations: Location[] = [
      {
        code: 1,
        name: 'Location 1',
        image: 'https://example.com/image1.jpg',
        creationDate: '2025-01-24',
      },
      {
        code: 2,
        name: 'Location 2',
        image: 'https://example.com/image2.jpg',
        creationDate: '2025-01-25',
      },
      {
        code: 3,
        name: 'Location 3',
        image: 'https://example.com/image3.jpg',
        creationDate: '2025-01-26',
      },
    ];

    return res(
      // Return the response using res
      ctx.status(200), // Set status code
      ctx.json(mockLocations), // Send JSON data
    );
  }),
];
