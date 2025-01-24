module.exports = {
  preset: 'ts-jest',
  testEnvironment: 'jsdom', // For React components
  transform: {
    '^.+\\.tsx?$': 'ts-jest', // Use ts-jest to transform TypeScript files
  },
  transformIgnorePatterns: [
    '/node_modules/(?!axios)/', // Ensure axios is not ignored by Jest
  ],
  globals: {
    'ts-jest': {
      useESM: true, // This is important for ES module compatibility
    },
  },
};
